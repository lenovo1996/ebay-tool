<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'VariationsType.php';
require_once 'NameValueListArrayType.php';

/**
  * This type is used by the <b>AddSellingManagerProduct</b> and <b>ReviseSellingManagerProduct</b> calls to add/revise listing-level Item Specifics and/or to define multiple variations for a new or existing Selling Manager Product record.
  * <br><br>
  * This type is also used by the respone of the <b>GetSellingManagerInventory</b> call.
  * 
 **/

class SellingManagerProductSpecificsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	public $PrimaryCategoryID;

	/**
	* @var VariationsType
	**/
	public $Variations;

	/**
	* @var NameValueListArrayType
	**/
	public $ItemSpecifics;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerProductSpecificsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PrimaryCategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Variations' =>
				array(
					'required' => false,
					'type' => 'VariationsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemSpecifics' =>
				array(
					'required' => false,
					'type' => 'NameValueListArrayType',
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
	function getPrimaryCategoryID()
	{
		return $this->PrimaryCategoryID;
	}

	/**
	 * @return void
	 **/
	function setPrimaryCategoryID($value)
	{
		$this->PrimaryCategoryID = $value;
	}

	/**
	 * @return VariationsType
	 **/
	function getVariations()
	{
		return $this->Variations;
	}

	/**
	 * @return void
	 **/
	function setVariations($value)
	{
		$this->Variations = $value;
	}

	/**
	 * @return NameValueListArrayType
	 **/
	function getItemSpecifics()
	{
		return $this->ItemSpecifics;
	}

	/**
	 * @return void
	 **/
	function setItemSpecifics($value)
	{
		$this->ItemSpecifics = $value;
	}

}
?>
