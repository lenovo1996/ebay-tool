<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PeriodCodeType.php';

/**
  * This type is deprecated as sellers can no longer set a buyer policy violation threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls.
  * 
  * 
 **/

class MaximumBuyerPolicyViolationsType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $Count;

	/**
	* @var PeriodCodeType
	**/
	protected $Period;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MaximumBuyerPolicyViolationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Count' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Period' =>
				array(
					'required' => false,
					'type' => 'PeriodCodeType',
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
	 * @return int
	 **/
	function getCount()
	{
		return $this->Count;
	}

	/**
	 * @return void
	 **/
	function setCount($value)
	{
		$this->Count = $value;
	}

	/**
	 * @return PeriodCodeType
	 **/
	function getPeriod()
	{
		return $this->Period;
	}

	/**
	 * @return void
	 **/
	function setPeriod($value)
	{
		$this->Period = $value;
	}

}
?>
