<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'InsuranceOptionCodeType.php';
require_once 'FlatRateInsuranceRangeCostType.php';

/**
  * This type is deprecated, as Shipping Insurance can no longer be offered by the seller to the buyer in the APIs.
  * 
  *       orders.
  * 
 **/

class ShippingInsuranceType extends EbatNs_ComplexType
{
	/**
	* @var InsuranceOptionCodeType
	**/
	public $InsuranceOption;

	/**
	* @var FlatRateInsuranceRangeCostType
	**/
	public $FlatRateInsuranceRangeCost;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ShippingInsuranceType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'InsuranceOption' =>
				array(
					'required' => false,
					'type' => 'InsuranceOptionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FlatRateInsuranceRangeCost' =>
				array(
					'required' => false,
					'type' => 'FlatRateInsuranceRangeCostType',
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

	/**
	 * @return FlatRateInsuranceRangeCostType
	 * @param integer $index 
	 **/
	function getFlatRateInsuranceRangeCost($index = null)
	{
		if ($index !== null)
		{
			return $this->FlatRateInsuranceRangeCost[$index];
		}
		else
		{
			return $this->FlatRateInsuranceRangeCost;
		}
	}

	/**
	 * @return void
	 * @param FlatRateInsuranceRangeCostType $value
	 * @param integer $index 
	 **/
	function setFlatRateInsuranceRangeCost($value, $index = null)
	{
		if ($index !== null)
		{
			$this->FlatRateInsuranceRangeCost[$index] = $value;
		}
		else
		{
			$this->FlatRateInsuranceRangeCost= $value;
		}
	}

	/**
	 * @return void
	 * @param FlatRateInsuranceRangeCostType $value
	 **/
	function addFlatRateInsuranceRangeCost($value)
	{
		$this->FlatRateInsuranceRangeCost[] = $value;
	}

}
?>
