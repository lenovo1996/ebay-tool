<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'SetUserNotesActionCodeType.php';
require_once 'NameValueListArrayType.php';
require_once 'SKUType.php';

/**
  * Enables users to add, modify, or delete a pinned note for any item that is being tracked in the My eBay All Selling and All Buying areas.
  * 
 **/

class SetUserNotesRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	public $ItemID;

	/**
	* @var SetUserNotesActionCodeType
	**/
	public $Action;

	/**
	* @var string
	**/
	public $NoteText;

	/**
	* @var string
	**/
	public $TransactionID;

	/**
	* @var NameValueListArrayType
	**/
	public $VariationSpecifics;

	/**
	* @var SKUType
	**/
	public $SKU;

	/**
	* @var string
	**/
	public $OrderLineItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetUserNotesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Action' =>
				array(
					'required' => false,
					'type' => 'SetUserNotesActionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NoteText' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VariationSpecifics' =>
				array(
					'required' => false,
					'type' => 'NameValueListArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SKU' =>
				array(
					'required' => false,
					'type' => 'SKUType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OrderLineItemID' =>
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
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

	/**
	 * @return SetUserNotesActionCodeType
	 **/
	function getAction()
	{
		return $this->Action;
	}

	/**
	 * @return void
	 **/
	function setAction($value)
	{
		$this->Action = $value;
	}

	/**
	 * @return string
	 **/
	function getNoteText()
	{
		return $this->NoteText;
	}

	/**
	 * @return void
	 **/
	function setNoteText($value)
	{
		$this->NoteText = $value;
	}

	/**
	 * @return string
	 **/
	function getTransactionID()
	{
		return $this->TransactionID;
	}

	/**
	 * @return void
	 **/
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}

	/**
	 * @return NameValueListArrayType
	 **/
	function getVariationSpecifics()
	{
		return $this->VariationSpecifics;
	}

	/**
	 * @return void
	 **/
	function setVariationSpecifics($value)
	{
		$this->VariationSpecifics = $value;
	}

	/**
	 * @return SKUType
	 **/
	function getSKU()
	{
		return $this->SKU;
	}

	/**
	 * @return void
	 **/
	function setSKU($value)
	{
		$this->SKU = $value;
	}

	/**
	 * @return string
	 **/
	function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
	}

	/**
	 * @return void
	 **/
	function setOrderLineItemID($value)
	{
		$this->OrderLineItemID = $value;
	}

}
?>
