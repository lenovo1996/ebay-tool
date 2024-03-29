<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemType.php';

/**
  * This call allows a seller to create and publish a fixed-price listing.
  * The main difference between <b>AddFixedPriceItem</b> and <b>AddItem</b> is that
  * <b>AddFixedPriceItem</b> supports the creation of fixed-price listings only,
  * whereas <b>AddItem</b> supports all listing formats.
  * <br>
  * <br>
  * Also, only <b>AddFixedPriceItem</b> supports multipl-variation listings
  * and tracking inventory by a seller-defined SKU value. <b>AddItem</b> does not support
  * Variations or the <b>InventoryTrackingMethod</b> field.
  * 
 **/

class AddFixedPriceItemRequestType extends AbstractRequestType
{
	/**
	* @var ItemType
	**/
	public $Item;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddFixedPriceItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
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
	 * @return ItemType
	 **/
	function getItem()
	{
		return $this->Item;
	}

	/**
	 * @return void
	 **/
	function setItem($value)
	{
		$this->Item = $value;
	}

}
?>
