<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ReturnsShipmentPayeeCodeType.php';

/**
  * This type defines the available options for who pays the return shipping costs for international returns.
  * 
 **/

class InternationalReturnsShipmentPayeeCodeType extends EbatNs_ComplexType
{
	/**
	* @var ReturnsShipmentPayeeCodeType
	**/
	protected $InternationalReturnsShipmentPayee;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('InternationalReturnsShipmentPayeeCodeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'InternationalReturnsShipmentPayee' =>
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
	function getInternationalReturnsShipmentPayee($index = null)
	{
		if ($index !== null)
		{
			return $this->InternationalReturnsShipmentPayee[$index];
		}
		else
		{
			return $this->InternationalReturnsShipmentPayee;
		}
	}

	/**
	 * @return void
	 * @param ReturnsShipmentPayeeCodeType $value
	 * @param integer $index 
	 **/
	function setInternationalReturnsShipmentPayee($value, $index = null)
	{
		if ($index !== null)
		{
			$this->InternationalReturnsShipmentPayee[$index] = $value;
		}
		else
		{
			$this->InternationalReturnsShipmentPayee= $value;
		}
	}

	/**
	 * @return void
	 * @param ReturnsShipmentPayeeCodeType $value
	 **/
	function addInternationalReturnsShipmentPayee($value)
	{
		$this->InternationalReturnsShipmentPayee[] = $value;
	}

}
?>
