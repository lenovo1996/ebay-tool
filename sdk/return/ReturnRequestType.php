<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'ReturnItemType.php';
require_once 'ReturnReasonType.php';

/**
  *             Type defining the <b>returnRequest</b> container that is returned in the 
  *             <b>getUserReturns</b> and <b>getReturnDetail</b> calls. The 
  *             <b>returnRequest</b> container consists of the return reason, the eBay 
  *             item and transaction IDs, and the item quantity.
  *           
 **/

class ReturnRequestType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var ReturnItemType
	**/
	public $returnItem;

	/**
	* @var ReturnReasonType
	**/
	public $returnReason;

	/**
	* @var string
	**/
	public $comments;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnRequestType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'returnItem' =>
				array(
					'required' => false,
					'type' => 'ReturnItemType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => true,
					'cardinality' => '0..*'
				),
				'returnReason' =>
				array(
					'required' => false,
					'type' => 'ReturnReasonType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'comments' =>
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
	 * @return ReturnItemType
	 * @param integer $index 
	 **/
	function getreturnItem($index = null)
	{
		if ($index !== null)
		{
			return $this->returnItem[$index];
		}
		else
		{
			return $this->returnItem;
		}
	}

	/**
	 * @return void
	 * @param ReturnItemType $value
	 * @param integer $index 
	 **/
	function setreturnItem($value, $index = null)
	{
		if ($index !== null)
		{
			$this->returnItem[$index] = $value;
		}
		else
		{
			$this->returnItem= $value;
		}
	}

	/**
	 * @return void
	 * @param ReturnItemType $value
	 **/
	function addreturnItem($value)
	{
		$this->returnItem[] = $value;
	}

	/**
	 * @return ReturnReasonType
	 **/
	function getreturnReason()
	{
		return $this->returnReason;
	}

	/**
	 * @return void
	 **/
	function setreturnReason($value)
	{
		$this->returnReason = $value;
	}

	/**
	 * @return string
	 **/
	function getcomments()
	{
		return $this->comments;
	}

	/**
	 * @return void
	 **/
	function setcomments($value)
	{
		$this->comments = $value;
	}

}
?>
