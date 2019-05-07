<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemIDType.php';
require_once 'OrderIDType.php';
require_once 'PaymentTypeCodeType.php';
require_once 'AmountType.php';

/**
  * <span class="tablenote"><b>Note: </b> This type is deprecated since it was only applicable to the Half.com, and the Half.com site was shut down.
  * </span>
  * 
 **/

class SellerPaymentType extends EbatNs_ComplexType
{
	/**
	* @var ItemIDType
	**/
	public $ItemID;

	/**
	* @var string
	**/
	public $TransactionID;

	/**
	* @var OrderIDType
	**/
	public $OrderID;

	/**
	* @var string
	**/
	public $SellerInventoryID;

	/**
	* @var string
	**/
	public $PrivateNotes;

	/**
	* @var string
	**/
	public $Title;

	/**
	* @var PaymentTypeCodeType
	**/
	public $PaymentType;

	/**
	* @var AmountType
	**/
	public $TransactionPrice;

	/**
	* @var AmountType
	**/
	public $ShippingReimbursement;

	/**
	* @var AmountType
	**/
	public $Commission;

	/**
	* @var AmountType
	**/
	public $AmountPaid;

	/**
	* @var dateTime
	**/
	public $PaidTime;

	/**
	* @var string
	**/
	public $OrderLineItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerPaymentType', 'urn:ebay:apis:eBLBaseComponents');
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
				'TransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OrderID' =>
				array(
					'required' => false,
					'type' => 'OrderIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerInventoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PrivateNotes' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Title' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentType' =>
				array(
					'required' => false,
					'type' => 'PaymentTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingReimbursement' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Commission' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AmountPaid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaidTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
	 * @return OrderIDType
	 **/
	function getOrderID()
	{
		return $this->OrderID;
	}

	/**
	 * @return void
	 **/
	function setOrderID($value)
	{
		$this->OrderID = $value;
	}

	/**
	 * @return string
	 **/
	function getSellerInventoryID()
	{
		return $this->SellerInventoryID;
	}

	/**
	 * @return void
	 **/
	function setSellerInventoryID($value)
	{
		$this->SellerInventoryID = $value;
	}

	/**
	 * @return string
	 **/
	function getPrivateNotes()
	{
		return $this->PrivateNotes;
	}

	/**
	 * @return void
	 **/
	function setPrivateNotes($value)
	{
		$this->PrivateNotes = $value;
	}

	/**
	 * @return string
	 **/
	function getTitle()
	{
		return $this->Title;
	}

	/**
	 * @return void
	 **/
	function setTitle($value)
	{
		$this->Title = $value;
	}

	/**
	 * @return PaymentTypeCodeType
	 **/
	function getPaymentType()
	{
		return $this->PaymentType;
	}

	/**
	 * @return void
	 **/
	function setPaymentType($value)
	{
		$this->PaymentType = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTransactionPrice()
	{
		return $this->TransactionPrice;
	}

	/**
	 * @return void
	 **/
	function setTransactionPrice($value)
	{
		$this->TransactionPrice = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getShippingReimbursement()
	{
		return $this->ShippingReimbursement;
	}

	/**
	 * @return void
	 **/
	function setShippingReimbursement($value)
	{
		$this->ShippingReimbursement = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getCommission()
	{
		return $this->Commission;
	}

	/**
	 * @return void
	 **/
	function setCommission($value)
	{
		$this->Commission = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getAmountPaid()
	{
		return $this->AmountPaid;
	}

	/**
	 * @return void
	 **/
	function setAmountPaid($value)
	{
		$this->AmountPaid = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getPaidTime()
	{
		return $this->PaidTime;
	}

	/**
	 * @return void
	 **/
	function setPaidTime($value)
	{
		$this->PaidTime = $value;
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
