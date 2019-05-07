<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ReturnsShipmentPayeeCodeType.php';

/**
  * This type defines the available options for who pays the return shipping costs for domestic returns.
  * 
 **/

class DomesticReturnsShipmentPayeeCodeType extends EbatNs_ComplexType
{
	/**
	* @var ReturnsShipmentPayeeCodeType
	**/
	public $DomesticReturnsShipmentPayee;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DomesticReturnsShipmentPayeeCodeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DomesticReturnsShipmentPayee' =>
				array(
					'required' => false,
					'type' => 'ReturnsShipmentPayeeCodeType',
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
	 * @return ReturnsShipmentPayeeCodeType
	 * @param integer $index 
	 **/
	function getDomesticReturnsShipmentPayee($index = null)
	{
		if ($index !== null)
		{
			return $this->DomesticReturnsShipmentPayee[$index];
		}
		else
		{
			return $this->DomesticReturnsShipmentPayee;
		}
	}

	/**
	 * @return void
	 * @param ReturnsShipmentPayeeCodeType $value
	 * @param integer $index 
	 **/
	function setDomesticReturnsShipmentPayee($value, $index = null)
	{
		if ($index !== null)
		{
			$this->DomesticReturnsShipmentPayee[$index] = $value;
		}
		else
		{
			$this->DomesticReturnsShipmentPayee= $value;
		}
	}

	/**
	 * @return void
	 * @param ReturnsShipmentPayeeCodeType $value
	 **/
	function addDomesticReturnsShipmentPayee($value)
	{
		$this->DomesticReturnsShipmentPayee[] = $value;
	}

}
?>
