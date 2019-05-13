<?php
// $Id: EbatNs_Logger.php,v 1.2 2008-06-05 08:21:06 michael Exp $
// $Log: EbatNs_Logger.php,v $

class EbatNsReturnManagement_Logger
{
	// debugging options
	public $debugXmlBeautify = true;
	public $debugLogDestination = 'stdout';
	public $debugSecureLogging = true;
	public $debugHtml = true;
	
	function __construct($beautfyXml = false, $destination = 'stdout', $asHtml = true, $SecureLogging = true)
	{
		$this->debugLogDestination = $destination;
		$this->debugXmlBeautify = $beautfyXml;
		$this->debugHtml = $asHtml;
		$this->debugSecureLogging = $SecureLogging;
	}
	
	function log($msg, $subject = null)
	{
		if ($this->debugLogDestination)
		{
			if ($this->debugSecureLogging)
			{
				$msg = preg_replace("/X-EBAY-SOA-SECURITY-TOKEN: .*/", "X-EBAY-SOA-SECURITY-TOKEN: ...", $msg);
			}

			if ($this->debugLogDestination == 'stdout')
			{
				if ($this->debugHtml)
				{
					print_r("<pre>");
					if ($subject)
						print_r("$subject :<br>");				
					print_r(htmlentities($msg) . "\r\n");
					print_r("</pre>");
				}
				else
				{
					if ($subject)
						print_r($subject . ' : ' . "\r\n"); 
					print_r($msg . "\r\n");
				}
			}
			else
			{
				ob_start();
				echo date('r') . "\t" . $subject . "\t";
				print_r($msg);
				echo "\r\n";
				error_log(ob_get_clean(), 3, $this->debugLogDestination);
			}			
		}
	}
	
	function logXml($xmlMsg, $subject = null)
	{
		if ($this->debugXmlBeautify)
		{
			if (is_object($xmlMsg))
				$this->log($xmlMsg);
			else
			{
				require_once 'XML/Beautifier.php';
				$xmlb = new XML_Beautifier();
				$this->log($xmlb->formatString($xmlMsg), $subject);
			}
			
			return;
		}
		
		$this->log($xmlMsg, $subject);
	}
}

class EbatNsReturnManagement_LoggerWire extends EbatNsReturnManagement_Logger
{
	public $Request = '';
	public $Response = '';
	function __construct()
	{
		parent::__construct(false, '', false, false);
	}
	
	function log($msg, $subject = null)
	{
		if ($subject == 'Request')
		{
			$this->Request = $msg;
		}
		else
		{
			if ($subject == 'Response' || $subject == 'ResponseRaw')
			{
			    $this->Response = $msg;
			}
		}
	}
	
	function getFullWireLog($beautifyRequest = true, $beautifyResponse = true)
	{	
		if ($beautifyRequest === true)
		{
			require_once 'XML/Beautifier.php';
			$xmlb = new XML_Beautifier();
			$this->Request = $xmlb->formatString($this->Request);
		}

		if ($beautifyResponse === true)
		{
			require_once 'XML/Beautifier.php';
			$xmlb = new XML_Beautifier();
			$this->Response = $xmlb->formatString($this->Response);
		}
		return $this->_RequestUrl .
			($this->debugHtml ? "<br>" : "\n") .
			($this->debugHtml ? htmlentities($this->Request) :  $this->Request) .
			($this->debugHtml ? "<br>" : "\n") .
			($this->debugHtml ? htmlentities($this->Response) : $this->Response);
	}
}
?>
