<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
  * This type is deprecated.
  * 
 **/

class CheckoutOrderDetailType extends EbatNs_ComplexType
{
	/**
	* @var AmountType
	**/
	public $TotalCartMerchandiseCost;

	/**
	* @var AmountType
	**/
	public $TotalCartShippingCost;

	/**
	* @var AmountType
	**/
	public $TotalTaxAmount;

	/**
	* @var AmountType
	**/
	public $TotalAmount;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CheckoutOrderDetailType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'TotalCartMerchandiseCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalCartShippingCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalTaxAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalAmount' =>
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
	 * @return AmountType
	 **/
	function getTotalCartMerchandiseCost()
	{
		return $this->TotalCartMerchandiseCost;
	}

	/**
	 * @return void
	 **/
	function setTotalCartMerchandiseCost($value)
	{
		$this->TotalCartMerchandiseCost = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalCartShippingCost()
	{
		return $this->TotalCartShippingCost;
	}

	/**
	 * @return void
	 **/
	function setTotalCartShippingCost($value)
	{
		$this->TotalCartShippingCost = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalTaxAmount()
	{
		return $this->TotalTaxAmount;
	}

	/**
	 * @return void
	 **/
	function setTotalTaxAmount($value)
	{
		$this->TotalTaxAmount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalAmount()
	{
		return $this->TotalAmount;
	}

	/**
	 * @return void
	 **/
	function setTotalAmount($value)
	{
		$this->TotalAmount = $value;
	}

}
?>
