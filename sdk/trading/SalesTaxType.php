<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
  * This type is used to show sales tax-related details for a tax jurisdiction. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
  * 
 **/

class SalesTaxType extends EbatNs_ComplexType
{
	/**
	* @var float
	**/
	public $SalesTaxPercent;

	/**
	* @var string
	**/
	public $SalesTaxState;

	/**
	* @var boolean
	**/
	public $ShippingIncludedInTax;

	/**
	* @var AmountType
	**/
	public $SalesTaxAmount;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SalesTaxType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SalesTaxPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SalesTaxState' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingIncludedInTax' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SalesTaxAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
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
	 * @return float
	 **/
	function getSalesTaxPercent()
	{
		return $this->SalesTaxPercent;
	}

	/**
	 * @return void
	 **/
	function setSalesTaxPercent($value)
	{
		$this->SalesTaxPercent = $value;
	}

	/**
	 * @return string
	 **/
	function getSalesTaxState()
	{
		return $this->SalesTaxState;
	}

	/**
	 * @return void
	 **/
	function setSalesTaxState($value)
	{
		$this->SalesTaxState = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShippingIncludedInTax()
	{
		return $this->ShippingIncludedInTax;
	}

	/**
	 * @return void
	 **/
	function setShippingIncludedInTax($value)
	{
		$this->ShippingIncludedInTax = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getSalesTaxAmount()
	{
		return $this->SalesTaxAmount;
	}

	/**
	 * @return void
	 **/
	function setSalesTaxAmount($value)
	{
		$this->SalesTaxAmount = $value;
	}

}
?>
