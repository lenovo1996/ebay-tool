<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is not currently in use.
  * 
  * 
 **/

class ShippingEstimatedDeliveryInfoType extends EbatNs_ComplexType
{
	/**
	* @var dateTime
	**/
	public $OriginalDeliveryEstimatedTimeMin;

	/**
	* @var dateTime
	**/
	public $OriginalDeliveryEstimatedTimeMax;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ShippingEstimatedDeliveryInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'OriginalDeliveryEstimatedTimeMin' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OriginalDeliveryEstimatedTimeMax' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	 * @return dateTime
	 **/
	function getOriginalDeliveryEstimatedTimeMin()
	{
		return $this->OriginalDeliveryEstimatedTimeMin;
	}

	/**
	 * @return void
	 **/
	function setOriginalDeliveryEstimatedTimeMin($value)
	{
		$this->OriginalDeliveryEstimatedTimeMin = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getOriginalDeliveryEstimatedTimeMax()
	{
		return $this->OriginalDeliveryEstimatedTimeMax;
	}

	/**
	 * @return void
	 **/
	function setOriginalDeliveryEstimatedTimeMax($value)
	{
		$this->OriginalDeliveryEstimatedTimeMax = $value;
	}

}
?>
