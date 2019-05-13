<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseRequest.php';
require_once 'ReturnIdType.php';

/**
  * Type defining the <b>provideTrackingInfo</b> request. This call is used to provide shipment tracking information. This action can be performed based on the status of the return case.
  *   
 **/

class ProvideTrackingInfoRequest extends BaseRequest
{
	/**
	* @var ReturnIdType
	**/
	public $ReturnId;

	/**
	* @var string
	**/
	public $trackingNumber;

	/**
	* @var string
	**/
	public $carrierUsed;

	/**
	* @var string
	**/
	public $comments;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProvideTrackingInfoRequest', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ReturnId' =>
				array(
					'required' => false,
					'type' => 'ReturnIdType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'trackingNumber' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'carrierUsed' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'comments' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ReturnIdType
	 **/
	function getReturnId()
	{
		return $this->ReturnId;
	}

	/**
	 * @return void
	 **/
	function setReturnId($value)
	{
		$this->ReturnId = $value;
	}

	/**
	 * @return string
	 **/
	function gettrackingNumber()
	{
		return $this->trackingNumber;
	}

	/**
	 * @return void
	 **/
	function settrackingNumber($value)
	{
		$this->trackingNumber = $value;
	}

	/**
	 * @return string
	 **/
	function getcarrierUsed()
	{
		return $this->carrierUsed;
	}

	/**
	 * @return void
	 **/
	function setcarrierUsed($value)
	{
		$this->carrierUsed = $value;
	}

	/**
	 * @return string
	 **/
	function getcomments()
	{
		return $this->comments;
	}

	/**
	 * @return void
	 **/
	function setcomments($value)
	{
		$this->comments = $value;
	}

}
?>
