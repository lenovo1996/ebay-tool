<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';

/**
  * Type defining the <b>itemFilter</b> container in the <b>getUserReturns</b> 
  * request. This container is used to retrieve all returns related to a specific eBay
  * listing or to a specific order line item.
  * 
 **/

class ItemFilterType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var string
	**/
	public $itemId;

	/**
	* @var string
	**/
	public $transactionId;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemFilterType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'itemId' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'transactionId' =>
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
	function getitemId()
	{
		return $this->itemId;
	}

	/**
	 * @return void
	 **/
	function setitemId($value)
	{
		$this->itemId = $value;
	}

	/**
	 * @return string
	 **/
	function gettransactionId()
	{
		return $this->transactionId;
	}

	/**
	 * @return void
	 **/
	function settransactionId($value)
	{
		$this->transactionId = $value;
	}

}
?>
