<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseResponse.php';
require_once 'TrackingStatusType.php';

/**
  * Type defining the <b>provideTrackingInfo</b> response. The caller should look for an
  * <b>ack</b> value of 'Success' to determine the success of the call.
  *   
 **/

class ProvideTrackingInfoResponse extends BaseResponse
{
	/**
	* @var TrackingStatusType
	**/
	public $deliveryStatus;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProvideTrackingInfoResponse', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'deliveryStatus' =>
				array(
					'required' => false,
					'type' => 'TrackingStatusType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return TrackingStatusType
	 **/
	function getdeliveryStatus()
	{
		return $this->deliveryStatus;
	}

	/**
	 * @return void
	 **/
	function setdeliveryStatus($value)
	{
		$this->deliveryStatus = $value;
	}

}
?>
