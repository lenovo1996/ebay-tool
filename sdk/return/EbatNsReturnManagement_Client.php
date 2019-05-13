<?php
// $Id: EbatNs_Client.php,v 1.6 2008-09-29 13:36:26 michael Exp $
// $Log: EbatNs_Client.php,v $

require_once 'EbatNsReturnManagement_ResponseError.php';
require_once 'EbatNsReturnManagement_ResponseParser.php';

require_once 'EbatNsReturnManagement_DataConverter.php';

class EbatNsReturnManagement_Client
{
	// endpoint for call
	var $_ep;
	var $_session;
	var $_currentResult;
	var $_parser = null;
	// callback-methods/functions for data-handling
	var $_hasCallbacks = false;
	var $_callbacks = null;
	// EbatNsReturnManagement_DataConverter object
	var $_dataConverter = null;

	var $_logger = null;
	var $_parserOptions = null;

	var $_paginationElementCounter = 0;
	var $_paginationMaxElements = -1;

	var $_transportOptions = array();
	var $_loggingOptions   = array();
	var $_callUsage = array();
	
	public $_base64File;
	
	var $_xmlns = 'urn:ebay:apis:eBLBaseComponents';

	//
	// timepoint-tracing
	//
	public $_timePoints = null;
	public $_timePointsSEQ = null;

	function getWsdlVersion()
	{
		return EBAY_WSDL_VERSION;
	}

	function __construct($session, $converter = 'EbatNsReturnManagement_DataConverterIso' )
	{
		$this->_session = $session;
		if ($converter)
			$this->_dataConverter = new $converter();
		$this->_parser = null;

		$timeout = $session->getRequestTimeout();
		if (!$timeout)
			$timeout = 300;
		$httpCompress = $session->getUseHttpCompression();

		$this->setTransportOptions(
				array(
					'HTTP_TIMEOUT'  => $timeout,
					'HTTP_COMPRESS' => $httpCompress));
	}

	function resetPaginationCounter($maxElements = -1)
	{
		$this->_paginationElementCounter = 0;
		if ($maxElements > 0)
			$this->_paginationMaxElements = $maxElements;
		else
			$this->_paginationMaxElements = -1;
	}

	function incrementPaginationCounter()
	{
		$this->_paginationElementCounter++;

		if ($this->_paginationMaxElements > 0 && ($this->_paginationElementCounter > $this->_paginationMaxElements))
			return false;
		else
			return true;
	}

	function getPaginationCounter()
	{
		return $this->_paginationElementCounter;
	}

	function setParserOption($name, $value = true)
	{
		$this->_parserOptions[$name] = $value;
	}

	function log( $msg, $subject = null )
	{
		if ( $this->_logger )
			$this->_logger->log( $msg, $subject );
	}

	function logXml( $xmlMsg, $subject = null )
	{
		if ( $this->_logger )
			$this->_logger->logXml( $xmlMsg, $subject );
	}

	function attachLogger($logger)
	{
		$this->_logger = $logger;
	}

	// HTTP_TIMEOUT: default 300 s
	// HTTP_COMPRESS: default true
	function setTransportOptions($options)
	{
		$this->_transportOptions = array_merge($this->_transportOptions, $options);
	}

	// LOG_TIMEPOINTS: true/false
	// LOG_API_USAGE: true/false
	function setLoggingOptions($options)
	{
		$this->_loggingOptions = array_merge($this->_loggingOptions, $options);
	}


	public function _getMicroseconds()
	{
		list( $ms, $s ) = explode( ' ', microtime() );
		return floor( $ms * 1000 ) + 1000 * $s;
	}

	public function _getElapsed( $start )
	{
		return $this->_getMicroseconds() - $start;
	}

	public function _startTp( $key )
	{
		if (!$this->_loggingOptions['LOG_TIMEPOINTS'])
			return;

		if ( isset( $this->_timePoints[$key] ) )
			$tp = $this->_timePoints[$key];

		$tp['start_tp'] = time();

		$tp['start'] = $this->_getMicroseconds();
		$this->_timePoints[$key] = $tp;
	}

	public function _stopTp( $key )
	{
		if (!$this->_loggingOptions['LOG_TIMEPOINTS'])
			return;

		if ( isset( $this->_timePoints[$key]['start'] ) )
		{
			$tp = $this->_timePoints[$key];
			$tp['duration'] = $this->_getElapsed( $tp['start'] ) . 'ms';
			unset( $tp['start'] );
			$this->_timePoints[$key] = $tp;
		}
	}

	public function _logTp()
	{
		if (!$this->_loggingOptions['LOG_TIMEPOINTS'])
			return;

		// log the timepoint-information
		ob_start();
		echo "<pre><br>\n";
		print_r($this->_timePoints);
		print_r("</pre><br>\n");
		$msg = ob_get_clean();
		$this->log($msg, '_EBATNS_TIMEPOINTS');
	}

	//
	// end timepoint-tracing
	//

	// callusage
	public function _incrementApiUsage($apiCall)
	{
		if (!$this->_loggingOptions['LOG_API_USAGE'])
			return;

		$this->_callUsage[$apiCall] = $this->_callUsage[$apiCall] + 1;
	}

	function getApiUsage()
	{
		return $this->_callUsage;
	}

	function getParser($tns = 'urn:ebay:apis:eBLBaseComponents', $parserOptions = null, $recreate = true)
	{
		if ($recreate)
			$this->_parser = null;

		if (!$this->_parser)
		{
			if ($parserOptions)
				$this->_parserOptions = $parserOptions;
			$this->_parser = new EbatNsReturnManagement_ResponseParser( $this, $tns, $this->_parserOptions );
		}
		return $this->_parser;
	}

	// should return true if the data should NOT be included to the
	// response-object !
	function _handleDataType( $typeName, $value, $mapName )
	{
		if ( $this->_hasCallbacks )
		{
			if (isset($this->_callbacks[strtolower( $typeName )]))
				$callback = $this->_callbacks[strtolower( $typeName )];
			else
				$callback = null;
			if ( $callback )
			{
				if ( is_object( $callback['object'] ) )
				{
					return call_user_func(array($callback['object'], $callback['method']), $typeName, $value, $mapName, $this );
					//return call_user_method( $callback['method'], $callback['object'], $typeName, & $value, $mapName, & $this );
				}
				else
				{
					return call_user_func( $callback['method'], $typeName, $value, $mapName, $this );
				}
			}
		}
		return false;
	}

	// $typeName as defined in Schema
	// $method (callback, either string or array with object/method)
	function setHandler( $typeName, $method )
	{
		$this->_hasCallbacks = true;
		if ( is_array( $method ) )
		{
			$callback['object'] = $method[0];
			$callback['method'] = $method[1];
		}
		else
		{
			$callback['object'] = null;
			$callback['method'] = $method;
		}

		$this->_callbacks[strtolower( $typeName )] = $callback;
	}

	// should return a serialized XML of the outgoing message
	function encodeMessage( $method, $request )
	{
		return $request->serialize( $method . 'Request', $request, null, true, null, $this->_dataConverter );
	}
	// should transform the response (body) to a PHP object structure
	function decodeMessage( $method, $msg, $parseMode )
	{
		$this->_parser = new EbatNsReturnManagement_ResponseParser( $this, $this->_xmlns, $this->_parserOptions );
		return $this->_parser->decode( $method . 'Response', $msg, $parseMode );
	}

	function call($method, $request, $parseMode = EBATNS_PARSEMODE_CALL)
	{
		// preserve old xmlns
		$xmlns = $this->_xmlns;
		$this->_xmlns = 'http://www.ebay.com/marketplace/returns/v1/services';
		
		if ($this->_session->getAppMode() == 1)
			$ep = 'https://svcs.sandbox.ebay.com/services/returns/v1/ReturnManagementService';
		else
			$ep = 'https://svcs.ebay.com/services/returns/v1/ReturnManagementService';

		$this->_incrementApiUsage($method);

		// place all data into theirs header
		
		$reqHeaders[] = 'X-EBAY-SOA-SERVICE-NAME: ReturnManagementService';
		$reqHeaders[] = 'X-EBAY-SOA-SERVICE-VERSION: ' . $this->getWsdlVersion();
		$reqHeaders[] = 'X-EBAY-SOA-OPERATION-NAME: ' . $method;
		$reqHeaders[] = 'X-EBAY-SOA-SECURITY-TOKEN: ' . $this->_session->getRequestToken();
		$globalId = $this->_session->getGlobalId();
		if (empty($globalId))
			$reqHeaders[] = 'X-EBAY-SOA-GLOBAL-ID: EBAY-US';
		else
			$reqHeaders[] = 'X-EBAY-SOA-GLOBAL-ID: ' . $globalId;
		$reqHeaders[] = 'X-EBAY-SOA-REQUEST-DATA-FORMAT: XML';

		$body = $this->encodeMessageXmlStyle( $method, $request );

		$message = '<?xml version="1.0" encoding="utf-8"?>' . "\n";
		$message .= $body;

		$this->_ep = $ep;

		$responseMsg = $this->sendMessage( $message, $reqHeaders );
		$responseMsg = str_replace('ns1:', '', $responseMsg); 
		
		if ( $responseMsg )
		{
			$this->_startTp('Decoding SOAP Message');
			$ret = & $this->decodeMessage( $method, $responseMsg, $parseMode );
			$this->_stopTp('Decoding SOAP Message');
		}
		else
		{
			$ret = & $this->_currentResult;
		}
		
		if ($this->_base64File)
		{
			$ret->getFileAttachment()->setData($this->_base64File);
			$this->_base64File = "";
		}
		// reset old xmlns
		$this->_xmlns = $xmlns;
		return $ret;
	}

	function sendMessageNonCurl( $message, $extraXmlHeaders )
	{
		// this is the part for systems that are not have cURL installed
		$transport = new EbatNsReturnManagement_HttpTransport();
		if (is_array($extraXmlHeaders))
			$reqHeaders = array_merge((array)$reqHeaders, $extraXmlHeaders);

		$responseRaw = $transport->Post($this->_ep, $message, $reqHeaders);
		if (!$responseRaw)
		{
			$this->_currentResult = new EbatNsReturnManagement_ResponseError();
			$this->_currentResult->raise( 'transport error (none curl) ', 90000 + 1, EBAT_SEVERITY_ERROR );
			return null;
		}
		else
		{
			if (isset($responseRaw['errors']))
			{
				$this->_currentResult = new EbatNsReturnManagement_ResponseError();
				$this->_currentResult->raise( 'transport error (none curl) ' . $responseRaw['errors'], 90000 + 2, EBAT_SEVERITY_ERROR );
				return null;
			}

			$responseBody = $responseRaw['data'];
			if ($responseBody)
				$this->logXml( $responseBody, 'Response' );
			else
				$this->logXml( $responseRaw, 'ResponseRaw' );

			return $responseBody;
		}
	}

	function sendMessage( $message, $extraXmlHeaders )
	{
		$this->_currentResult = null;

		$this->log( $this->_ep, 'RequestUrl' );
		$this->logXml( $message, 'Request' );

		$timeout = $this->_transportOptions['HTTP_TIMEOUT'];
		if (!$timeout || $timeout <= 0)
			$timeout = 300;

		// if we have a special HttpTransport-class defined use it !
		if (class_exists('EbatNsReturnManagement_HttpTransport'))
			return $this->sendMessageNonCurl($message, $extraXmlHeaders);

		// continue with curl support !
		$ch = curl_init();

		$reqHeaders[] = 'Content-Type: text/xml;charset=utf-8';

		if ($this->_transportOptions['HTTP_COMPRESS'])
		{
			$reqHeaders[] = 'Accept-Encoding: gzip, deflate';
			curl_setopt( $ch, CURLOPT_ENCODING, "gzip");
			curl_setopt( $ch, CURLOPT_ENCODING, "deflate");
		}

		if (is_array($extraXmlHeaders))
			$reqHeaders = array_merge((array)$reqHeaders, $extraXmlHeaders);

		ob_start();
		print_r($reqHeaders);
		$this->log(ob_get_clean(), 'Request headers');

		curl_setopt( $ch, CURLOPT_URL, $this->_ep );

		// curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
		// curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);

		curl_setopt( $ch, CURLOPT_HTTPHEADER, $reqHeaders );
		curl_setopt( $ch, CURLOPT_USERAGENT, 'ebatns;shapi;1.0' );
		curl_setopt( $ch, CURLOPT_TIMEOUT, $timeout );

		curl_setopt( $ch, CURLOPT_POST, 1 );
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $message );

		curl_setopt( $ch, CURLOPT_FAILONERROR, 0 );
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $ch, CURLOPT_HEADER, 1 );
		curl_setopt( $ch, CURLOPT_HTTP_VERSION, 1 );

		// added support for multi-threaded clients
		if (isset($this->_transportOptions['HTTP_CURL_MULTITHREADED']))
		{
			curl_setopt( $ch, CURLOPT_DNS_USE_GLOBAL_CACHE, 0 );
		}

		$responseRaw = curl_exec( $ch );

		if ( !$responseRaw )
		{
			$this->_currentResult = new EbatNsReturnManagement_ResponseError();
			$this->_currentResult->raise( 'curl_error ' . curl_errno( $ch ) . ' ' . curl_error( $ch ), 80000 + 1, EBAT_SEVERITY_ERROR );
			curl_close( $ch );

			return null;
		}
		else
		{
			curl_close( $ch );

			$responseBody = null;
			if ( preg_match( "/^(.*?)\r?\n\r?\n(.*)/s", $responseRaw, $match ) )
			{
				$responseBody = $match[2];
				//$headerLines = split( "\r?\n", $match[1] );
				$headerLines = preg_split( "/\r?\n/", $match[1] );
				foreach ( $headerLines as $line )
				{
					if ( strpos( $line, ':' ) === false )
					{
						$responseHeaders[0] = $line;
						continue;
					}
					//list( $key, $value ) = split( ':', $line );
					list( $key, $value ) = explode( ':', $line );
					$responseHeaders[strtolower( $key )] = trim( $value );
				}
			}
			if (isset($responseHeaders['content-type']))
			{
				$ctList = explode(';', $responseHeaders['content-type']);
				if ($ctList[0] == 'multipart/related')
				{
					list($dummy, $boundaryMarker) = explode('=', $ctList[1]);
				}
				$piecesMime = explode("--".$boundaryMarker, $responseRaw);
			
				foreach ($piecesMime as $part)
				{
					if ( preg_match( "/^(.*?)\r?\n\r?\n(.*)/s", $part, $match ) )
					{
						$headerLines = explode( "\r?\n", $match[1] );
						foreach ( $headerLines as $line )
						{
							if ( strpos( $line, ':' ) === false )
							{
								$responseHeadersPart[0] = $line;
								continue;
							}
							list( $key, $value ) = explode( ':', $line );
							$responseHeadersPart[strtolower( $key )] = trim( $value );
						}
					}
					
					if (isset($responseHeadersPart['content-type']))
					{
						if ($responseHeadersPart['content-type'] == 'application/xop+xml; charset=utf-8; type="text/xml"')
						{
							$responseBody = $match[2];
						}
						elseif ($responseHeadersPart['content-type'] == 'application/zip')
						{
							$responseBody = preg_replace
							(
								array
								(
									'/<xop:Include[^>]+>/',
									'/<Size>.*<\/Size>/'
								),
								array
								(
									base64_encode($match[2]),
									'<Size>' . strlen($match[2]) . '</Size>'
								),
								$responseBody
							);
							$this->_base64File = base64_encode($match[2]);
						}
					}
				}
			}
			if ($responseBody)
				$this->logXml( $responseBody, 'Response' );
			else
				$this->logXml( $responseRaw, 'ResponseRaw' );
		}
		
		return $responseBody;
	}

	function encodeMessageXmlStyle( $method, $request )
	{
		return $request->serialize( $method . 'Request', $request, array('xmlns' => $this->_xmlns), true, null, $this->_dataConverter );
	}

	public function hasDataConverter()
	{
	    return ($this->_dataConverter !== null);
	}

	public function getDataConverter()
	{
	    return $this->_dataConverter;
	}

    public function hasCallbacks()
	{
	    return $this->_hasCallbacks;
	}

	/**
	 * Reformats the error data in the response to a printable text or html output
	 *
	 * @param AbstractResponseType $response	A response returned by any of the eBay API calls
	 * @param Boolean $asHtml	Flag to pass the error in htmlentities for better formating
	 * @param Boolean $addSlashes	Uses addslashes to make the error-string directly insertable to a DB
	 * @return string
	 */
	public function getErrorsToString($response, $asHtml = false, $addSlashes = true)
	{
		$errmsg = '';

		if ($response->geterrorMessage() && count($response->geterrorMessage()->getError()))
			foreach ($response->geterrorMessage()->geterror() as $errorEle)
				$errmsg .= '#' . $errorEle->geterrorId() . ' : ' . ($asHtml ? htmlentities($errorEle->getmessage()) :  $errorEle->getmessage()) . ($asHtml ? "<br>" : "\r\n");

		if ($addSlashes)
			return addslashes($errmsg);
		else
			return $errmsg;
	}
}
?>
