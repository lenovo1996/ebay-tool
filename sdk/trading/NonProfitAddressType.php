<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AddressTypeCodeType.php';

/**
  * Type defining the <b>NonProfitAddress</b> container, which consists of the address (including latitude and longitude) of a nonprofit charity organization.
  * 
 **/

class NonProfitAddressType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	public $AddressLine1;

	/**
	* @var string
	**/
	public $AddressLine2;

	/**
	* @var string
	**/
	public $City;

	/**
	* @var string
	**/
	public $State;

	/**
	* @var string
	**/
	public $ZipCode;

	/**
	* @var decimal
	**/
	public $Latitude;

	/**
	* @var decimal
	**/
	public $Longitude;

	/**
	* @var AddressTypeCodeType
	**/
	public $AddressType;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NonProfitAddressType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AddressLine1' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AddressLine2' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'City' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'State' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ZipCode' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Latitude' =>
				array(
					'required' => false,
					'type' => 'decimal',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Longitude' =>
				array(
					'required' => false,
					'type' => 'decimal',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AddressType' =>
				array(
					'required' => false,
					'type' => 'AddressTypeCodeType',
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
	 * @return string
	 **/
	function getAddressLine1()
	{
		return $this->AddressLine1;
	}

	/**
	 * @return void
	 **/
	function setAddressLine1($value)
	{
		$this->AddressLine1 = $value;
	}

	/**
	 * @return string
	 **/
	function getAddressLine2()
	{
		return $this->AddressLine2;
	}

	/**
	 * @return void
	 **/
	function setAddressLine2($value)
	{
		$this->AddressLine2 = $value;
	}

	/**
	 * @return string
	 **/
	function getCity()
	{
		return $this->City;
	}

	/**
	 * @return void
	 **/
	function setCity($value)
	{
		$this->City = $value;
	}

	/**
	 * @return string
	 **/
	function getState()
	{
		return $this->State;
	}

	/**
	 * @return void
	 **/
	function setState($value)
	{
		$this->State = $value;
	}

	/**
	 * @return string
	 **/
	function getZipCode()
	{
		return $this->ZipCode;
	}

	/**
	 * @return void
	 **/
	function setZipCode($value)
	{
		$this->ZipCode = $value;
	}

	/**
	 * @return decimal
	 **/
	function getLatitude()
	{
		return $this->Latitude;
	}

	/**
	 * @return void
	 **/
	function setLatitude($value)
	{
		$this->Latitude = $value;
	}

	/**
	 * @return decimal
	 **/
	function getLongitude()
	{
		return $this->Longitude;
	}

	/**
	 * @return void
	 **/
	function setLongitude($value)
	{
		$this->Longitude = $value;
	}

	/**
	 * @return AddressTypeCodeType
	 **/
	function getAddressType()
	{
		return $this->AddressType;
	}

	/**
	 * @return void
	 **/
	function setAddressType($value)
	{
		$this->AddressType = $value;
	}

}
?>
