<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is deprecated.
  * 
 **/

class DataElementSetType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	public $DataElement;

	/**
	* @var int
	**/
	public $DataElementID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DataElementSetType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DataElement' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DataElementID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'attributeSetID' =>
			array(
				'name' => ' attributeSetID',
				'type' => 'int',
				'use' => 'optional'
			)));
	}

	/**
	 * @return string
	 **/
	function getDataElement()
	{
		return $this->DataElement;
	}

	/**
	 * @return void
	 **/
	function setDataElement($value)
	{
		$this->DataElement = $value;
	}

	/**
	 * @return int
	 **/
	function getDataElementID()
	{
		return $this->DataElementID;
	}

	/**
	 * @return void
	 **/
	function setDataElementID($value)
	{
		$this->DataElementID = $value;
	}


}
?>
