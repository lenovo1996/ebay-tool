<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is used to provide the name and email of both the purchaser of a digital gift card, and the recipient of the digital gift card.
  * 
 **/

class DigitalDeliveryUserType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	public $Name;

	/**
	* @var string
	**/
	public $Email;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DigitalDeliveryUserType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Email' =>
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
	function getName()
	{
		return $this->Name;
	}

	/**
	 * @return void
	 **/
	function setName($value)
	{
		$this->Name = $value;
	}

	/**
	 * @return string
	 **/
	function getEmail()
	{
		return $this->Email;
	}

	/**
	 * @return void
	 **/
	function setEmail($value)
	{
		$this->Email = $value;
	}

}
?>
