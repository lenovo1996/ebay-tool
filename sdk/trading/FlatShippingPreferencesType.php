<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'FlatRateInsuranceRangeCostType.php';
require_once 'FlatShippingRateOptionCodeType.php';
require_once 'InsuranceOptionCodeType.php';

/**
  * This type is deprecated.
  * 
 **/

class FlatShippingPreferencesType extends EbatNs_ComplexType
{
	/**
	* @var AmountType
	**/
	public $AmountPerAdditionalItem;

	/**
	* @var AmountType
	**/
	public $DeductionAmountPerAdditionalItem;

	/**
	* @var FlatRateInsuranceRangeCostType
	**/
	public $FlatRateInsuranceRangeCost;

	/**
	* @var FlatShippingRateOptionCodeType
	**/
	public $FlatShippingRateOption;

	/**
	* @var InsuranceOptionCodeType
	**/
	public $InsuranceOption;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('FlatShippingPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AmountPerAdditionalItem' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeductionAmountPerAdditionalItem' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FlatRateInsuranceRangeCost' =>
				array(
					'required' => false,
					'type' => 'FlatRateInsuranceRangeCostType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..6'
				),
				'FlatShippingRateOption' =>
				array(
					'required' => false,
					'type' => 'FlatShippingRateOptionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InsuranceOption' =>
				array(
					'required' => false,
					'type' => 'InsuranceOptionCodeType',
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
	function getAmountPerAdditionalItem()
	{
		return $this->AmountPerAdditionalItem;
	}

	/**
	 * @return void
	 **/
	function setAmountPerAdditionalItem($value)
	{
		$this->AmountPerAdditionalItem = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getDeductionAmountPerAdditionalItem()
	{
		return $this->DeductionAmountPerAdditionalItem;
	}

	/**
	 * @return void
	 **/
	function setDeductionAmountPerAdditionalItem($value)
	{
		$this->DeductionAmountPerAdditionalItem = $value;
	}

	/**
	 * @return FlatRateInsuranceRangeCostType
	 **/
	function getFlatRateInsuranceRangeCost()
	{
		return $this->FlatRateInsuranceRangeCost;
	}

	/**
	 * @return void
	 **/
	function setFlatRateInsuranceRangeCost($value)
	{
		$this->FlatRateInsuranceRangeCost = $value;
	}

	/**
	 * @return FlatShippingRateOptionCodeType
	 **/
	function getFlatShippingRateOption()
	{
		return $this->FlatShippingRateOption;
	}

	/**
	 * @return void
	 **/
	function setFlatShippingRateOption($value)
	{
		$this->FlatShippingRateOption = $value;
	}

	/**
	 * @return InsuranceOptionCodeType
	 **/
	function getInsuranceOption()
	{
		return $this->InsuranceOption;
	}

	/**
	 * @return void
	 **/
	function setInsuranceOption($value)
	{
		$this->InsuranceOption = $value;
	}

}
?>
