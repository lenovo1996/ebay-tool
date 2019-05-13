<?php
// $Id: ClientProxy.tpl.php,v 1.4 2008-06-06 05:39:14 michael Exp $
// $Log: ClientProxy.tpl.php,v $

// auto-generated 5/7/15 1:17 PM
// Ebay-Schema Version 1.1.0

/**
 * Load files we depend on.
 */

require_once 'EbatNsReturnManagement_Client.php';
require_once 'EbatNsReturnManagement_Session.php';

/**
 * The WSDL version the SDK is built against.
 */
define('EBAY_WSDL_VERSION', '1.1.0');

/**
 * This class is the basic interface to the eBay-Webserice for the user.
 * We generated the "proxy" externally as the SOAP-wsdl proxy generator does
 * not really did what we needed.
 */
class EbatNsReturnManagement_ServiceProxy extends EbatNsReturnManagement_Client
{
    /**
     * Setup the ServiceProxy 
     *
     * @param mixed $sessionOrConfig Could be either a path to a config-file or a EbatNsReturnManagement_Session-object
     * @param string $converter Name of the converter class used, defaults to 'EbatNsReturnManagement_DataConverterIso' for convertion from uft8 to iso-8859-1
     */
    function __construct($sessionOrConfig, $converter = 'EbatNsReturnManagement_DataConverterIso')
    {
        if ($sessionOrConfig instanceof EbatNsReturnManagement_Session)
        {
			// Initialize the SOAP Client.
			parent::__construct($sessionOrConfig, $converter);
		}
		else
		{
			// assume that $session is the path to the config-file
			//
		    if (is_string($sessionOrConfig))
			{
				$session = new EbatNsReturnManagement_Session($sessionOrConfig);
				parent::__construct($session, $converter);
			}
		}
    }

    /**
     * Checks if the response has errors (from the eBay API side)
     *
     * @param AbstractResponseType $response	A response returned by any of the eBay API calls
     * @param Boolean $ignoreWarnings	true (default) will ignore warnings, so we detect ONLY real failures ...
     * @return Boolean
     */
	function isGood($response, $ignoreWarnings = true)
	{
		if ($ignoreWarnings)
			return ($response->getAck() == 'Success' || $response->getAck() == 'Warning');		
		else
			return ($response->getAck() == 'Success');
	}

	/**
	 * Checks if the response had failures
	 *
	 * @param AbstractResponseType $response	A response returned by any of the eBay API calls
	 * @return Boolean
	 */
	function isFailure($response)
	{
		return ($response->getAck() == 'Failure');
	}
		/**
	 * @return getVersionResponseType
	 * @param getVersionRequestType
	 **/
	function getVersion($request)
	{
		return $this->call('getVersion', $request);
	}

	/**
	 * @return getUserReturnsResponseType
	 * @param getUserReturnsRequestType
	 **/
	function getUserReturns($request)
	{
		return $this->call('getUserReturns', $request);
	}

	/**
	 * @return getReturnDetailResponseType
	 * @param getReturnDetailRequestType
	 **/
	function getReturnDetail($request)
	{
		return $this->call('getReturnDetail', $request);
	}

	/**
	 * @return getActivityOptionsResponseType
	 * @param getActivityOptionsRequestType
	 **/
	function getActivityOptions($request)
	{
		return $this->call('getActivityOptions', $request);
	}

	/**
	 * @return issueRefundResponseType
	 * @param issueRefundRequestType
	 **/
	function issueRefund($request)
	{
		return $this->call('issueRefund', $request);
	}

	/**
	 * @return provideSellerInfoResponseType
	 * @param provideSellerInfoRequestType
	 **/
	function provideSellerInfo($request)
	{
		return $this->call('provideSellerInfo', $request);
	}

	/**
	 * @return getReturnMetadataResponseType
	 * @param getReturnMetadataRequestType
	 **/
	function getReturnMetadata($request)
	{
		return $this->call('getReturnMetadata', $request);
	}

	/**
	 * @return provideTrackingInfoResponseType
	 * @param provideTrackingInfoRequestType
	 **/
	function provideTrackingInfo($request)
	{
		return $this->call('provideTrackingInfo', $request);
	}

	/**
	 * @return setItemAsReceivedResponseType
	 * @param setItemAsReceivedRequestType
	 **/
	function setItemAsReceived($request)
	{
		return $this->call('setItemAsReceived', $request);
	}


}
?>
