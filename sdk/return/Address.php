<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';

/**
  * This type defines the return shipping address of the seller, and it is used by the <b>returnAddress</b> 
  * container of the <b>provideSellerInfo</b> request and by the <b>shippingAddress</b> 
  * container of the <b>getReturnDetail</b> response.
  * 
 **/

class Address extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var string
	**/
	public $name;

	/**
	* @var string
	**/
	public $street1;

	/**
	* @var string
	**/
	public $street2;

	/**
	* @var string
	**/
	public $city;

	/**
	* @var string
	**/
	public $county;

	/**
	* @var string
	**/
	public $stateOrProvince;

	/**
	* @var string
	**/
	public $country;

	/**
	* @var string
	**/
	public $postalCode;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('Address', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'street1' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'street2' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'city' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'county' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'stateOrProvince' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'country' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'postalCode' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
	function getname()
	{
		return $this->name;
	}

	/**
	 * @return void
	 **/
	function setname($value)
	{
		$this->name = $value;
	}

	/**
	 * @return string
	 **/
	function getstreet1()
	{
		return $this->street1;
	}

	/**
	 * @return void
	 **/
	function setstreet1($value)
	{
		$this->street1 = $value;
	}

	/**
	 * @return string
	 **/
	function getstreet2()
	{
		return $this->street2;
	}

	/**
	 * @return void
	 **/
	function setstreet2($value)
	{
		$this->street2 = $value;
	}

	/**
	 * @return string
	 **/
	function getcity()
	{
		return $this->city;
	}

	/**
	 * @return void
	 **/
	function setcity($value)
	{
		$this->city = $value;
	}

	/**
	 * @return string
	 **/
	function getcounty()
	{
		return $this->county;
	}

	/**
	 * @return void
	 **/
	function setcounty($value)
	{
		$this->county = $value;
	}

	/**
	 * @return string
	 **/
	function getstateOrProvince()
	{
		return $this->stateOrProvince;
	}

	/**
	 * @return void
	 **/
	function setstateOrProvince($value)
	{
		$this->stateOrProvince = $value;
	}

	/**
	 * @return string
	 **/
	function getcountry()
	{
		return $this->country;
	}

	/**
	 * @return void
	 **/
	function setcountry($value)
	{
		$this->country = $value;
	}

	/**
	 * @return string
	 **/
	function getpostalCode()
	{
		return $this->postalCode;
	}

	/**
	 * @return void
	 **/
	function setpostalCode($value)
	{
		$this->postalCode = $value;
	}

}
?>
