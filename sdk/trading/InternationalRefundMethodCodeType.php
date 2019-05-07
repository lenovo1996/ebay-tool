<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ReturnsRefundMethodCodeType.php';

/**
  * This type defines the available options the seller has for handling international returns.
  * 
 **/

class InternationalRefundMethodCodeType extends EbatNs_ComplexType
{
	/**
	* @var ReturnsRefundMethodCodeType
	**/
	public $InternationalRefundMethod;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('InternationalRefundMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'InternationalRefundMethod' =>
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
	function getInternationalRefundMethod($index = null)
	{
		if ($index !== null)
		{
			return $this->InternationalRefundMethod[$index];
		}
		else
		{
			return $this->InternationalRefundMethod;
		}
	}

	/**
	 * @return void
	 * @param ReturnsRefundMethodCodeType $value
	 * @param integer $index 
	 **/
	function setInternationalRefundMethod($value, $index = null)
	{
		if ($index !== null)
		{
			$this->InternationalRefundMethod[$index] = $value;
		}
		else
		{
			$this->InternationalRefundMethod= $value;
		}
	}

	/**
	 * @return void
	 * @param ReturnsRefundMethodCodeType $value
	 **/
	function addInternationalRefundMethod($value)
	{
		$this->InternationalRefundMethod[] = $value;
	}

}
?>
