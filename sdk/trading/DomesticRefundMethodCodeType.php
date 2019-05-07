<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ReturnsRefundMethodCodeType.php';

/**
  * This type defines the available options the seller has for handling domestic returns.
  * 
 **/

class DomesticRefundMethodCodeType extends EbatNs_ComplexType
{
	/**
	* @var ReturnsRefundMethodCodeType
	**/
	public $DomesticRefundMethod;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DomesticRefundMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DomesticRefundMethod' =>
				array(
					'required' => false,
					'type' => 'ReturnsRefundMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ReturnsRefundMethodCodeType
	 * @param integer $index 
	 **/
	function getDomesticRefundMethod($index = null)
	{
		if ($index !== null)
		{
			return $this->DomesticRefundMethod[$index];
		}
		else
		{
			return $this->DomesticRefundMethod;
		}
	}

	/**
	 * @return void
	 * @param ReturnsRefundMethodCodeType $value
	 * @param integer $index 
	 **/
	function setDomesticRefundMethod($value, $index = null)
	{
		if ($index !== null)
		{
			$this->DomesticRefundMethod[$index] = $value;
		}
		else
		{
			$this->DomesticRefundMethod= $value;
		}
	}

	/**
	 * @return void
	 * @param ReturnsRefundMethodCodeType $value
	 **/
	function addDomesticRefundMethod($value)
	{
		$this->DomesticRefundMethod[] = $value;
	}

}
?>
