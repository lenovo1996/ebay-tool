<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'SKUType.php';

/**
  * Acknowledgement that includes SKU, as well as the date and time that the listing ended due to the call to EndFixedPriceItem.
  * 
 **/

class EndFixedPriceItemResponseType extends AbstractResponseType
{
	/**
	* @var dateTime
	**/
	public $EndTime;

	/**
	* @var SKUType
	**/
	public $SKU;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('EndFixedPriceItemResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'EndTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SKU' =>
				array(
					'required' => false,
					'type' => 'SKUType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
	function getEndTime()
	{
		return $this->EndTime;
	}

	/**
	 * @return void
	 **/
	function setEndTime($value)
	{
		$this->EndTime = $value;
	}

	/**
	 * @return SKUType
	 **/
	function getSKU()
	{
		return $this->SKU;
	}

	/**
	 * @return void
	 **/
	function setSKU($value)
	{
		$this->SKU = $value;
	}

}
?>
