<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'TaxJurisdictionType.php';

/**
  * This type is used to express sales tax details for one or more tax jurisdictions. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
  * 
 **/

class TaxTableType extends EbatNs_ComplexType
{
	/**
	* @var TaxJurisdictionType
	**/
	public $TaxJurisdiction;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('TaxTableType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'TaxJurisdiction' =>
				array(
					'required' => false,
					'type' => 'TaxJurisdictionType',
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
	 * @return TaxJurisdictionType
	 * @param integer $index 
	 **/
	function getTaxJurisdiction($index = null)
	{
		if ($index !== null)
		{
			return $this->TaxJurisdiction[$index];
		}
		else
		{
			return $this->TaxJurisdiction;
		}
	}

	/**
	 * @return void
	 * @param TaxJurisdictionType $value
	 * @param integer $index 
	 **/
	function setTaxJurisdiction($value, $index = null)
	{
		if ($index !== null)
		{
			$this->TaxJurisdiction[$index] = $value;
		}
		else
		{
			$this->TaxJurisdiction= $value;
		}
	}

	/**
	 * @return void
	 * @param TaxJurisdictionType $value
	 **/
	function addTaxJurisdiction($value)
	{
		$this->TaxJurisdiction[] = $value;
	}

}
?>
