<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
  * 
 **/

class WarrantyTypeDetailsType extends EbatNs_ComplexType
{
	/**
	* @var token
	**/
	public $WarrantyTypeOption;

	/**
	* @var string
	**/
	public $Description;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('WarrantyTypeDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'WarrantyTypeOption' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Description' =>
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
	 * @return token
	 **/
	function getWarrantyTypeOption()
	{
		return $this->WarrantyTypeOption;
	}

	/**
	 * @return void
	 **/
	function setWarrantyTypeOption($value)
	{
		$this->WarrantyTypeOption = $value;
	}

	/**
	 * @return string
	 **/
	function getDescription()
	{
		return $this->Description;
	}

	/**
	 * @return void
	 **/
	function setDescription($value)
	{
		$this->Description = $value;
	}

}
?>
