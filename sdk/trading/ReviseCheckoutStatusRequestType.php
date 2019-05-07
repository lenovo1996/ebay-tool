<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'AmountType.php';
require_once 'BuyerPaymentMethodCodeType.php';
require_once 'CompleteStatusCodeType.php';
require_once 'CheckoutMethodCodeType.php';
require_once 'InsuranceSelectedCodeType.php';
require_once 'RCSPaymentStatusCodeType.php';
require_once 'AddressType.php';
require_once 'ExternalTransactionType.php';

/**
  * Enables a seller to update the payment details, the shipping details,
  * and the status of an order.
  * 
 **/

class ReviseCheckoutStatusRequestType extends AbstractRequestType
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
	* @var string
	**/
	public $OrderID;

	/**
	* @var AmountType
	**/
	public $AmountPaid;

	/**
	* @var BuyerPaymentMethodCodeType
	**/
	public $PaymentMethodUsed;

	/**
	* @var CompleteStatusCodeType
	**/
	public $CheckoutStatus;

	/**
	* @var token
	**/
	public $ShippingService;

	/**
	* @var boolean
	**/
	public $ShippingIncludedInTax;

	/**
	* @var CheckoutMethodCodeType
	**/
	public $CheckoutMethod;

	/**
	* @var InsuranceSelectedCodeType
	**/
	public $InsuranceType;

	/**
	* @var RCSPaymentStatusCodeType
	**/
	public $PaymentStatus;

	/**
	* @var AmountType
	**/
	public $AdjustmentAmount;

	/**
	* @var AddressType
	**/
	public $ShippingAddress;

	/**
	* @var string
	**/
	public $BuyerID;

	/**
	* @var AmountType
	**/
	public $ShippingInsuranceCost;

	/**
	* @var AmountType
	**/
	public $SalesTax;

	/**
	* @var AmountType
	**/
	public $ShippingCost;

	/**
	* @var string
	**/
	public $EncryptedID;

	/**
	* @var ExternalTransactionType
	**/
	public $ExternalTransaction;

	/**
	* @var string
	**/
	public $MultipleSellerPaymentID;

	/**
	* @var AmountType
	**/
	public $CODCost;

	/**
	* @var string
	**/
	public $OrderLineItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReviseCheckoutStatusRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'PaymentMethodUsed' =>
				array(
					'required' => false,
					'type' => 'BuyerPaymentMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CheckoutStatus' =>
				array(
					'required' => false,
					'type' => 'CompleteStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingService' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingIncludedInTax' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CheckoutMethod' =>
				array(
					'required' => false,
					'type' => 'CheckoutMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InsuranceType' =>
				array(
					'required' => false,
					'type' => 'InsuranceSelectedCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentStatus' =>
				array(
					'required' => false,
					'type' => 'RCSPaymentStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AdjustmentAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingAddress' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingInsuranceCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SalesTax' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EncryptedID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalTransaction' =>
				array(
					'required' => false,
					'type' => 'ExternalTransactionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MultipleSellerPaymentID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CODCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
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
	 * @return string
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
	 * @return BuyerPaymentMethodCodeType
	 **/
	function getPaymentMethodUsed()
	{
		return $this->PaymentMethodUsed;
	}

	/**
	 * @return void
	 **/
	function setPaymentMethodUsed($value)
	{
		$this->PaymentMethodUsed = $value;
	}

	/**
	 * @return CompleteStatusCodeType
	 **/
	function getCheckoutStatus()
	{
		return $this->CheckoutStatus;
	}

	/**
	 * @return void
	 **/
	function setCheckoutStatus($value)
	{
		$this->CheckoutStatus = $value;
	}

	/**
	 * @return token
	 **/
	function getShippingService()
	{
		return $this->ShippingService;
	}

	/**
	 * @return void
	 **/
	function setShippingService($value)
	{
		$this->ShippingService = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShippingIncludedInTax()
	{
		return $this->ShippingIncludedInTax;
	}

	/**
	 * @return void
	 **/
	function setShippingIncludedInTax($value)
	{
		$this->ShippingIncludedInTax = $value;
	}

	/**
	 * @return CheckoutMethodCodeType
	 **/
	function getCheckoutMethod()
	{
		return $this->CheckoutMethod;
	}

	/**
	 * @return void
	 **/
	function setCheckoutMethod($value)
	{
		$this->CheckoutMethod = $value;
	}

	/**
	 * @return InsuranceSelectedCodeType
	 **/
	function getInsuranceType()
	{
		return $this->InsuranceType;
	}

	/**
	 * @return void
	 **/
	function setInsuranceType($value)
	{
		$this->InsuranceType = $value;
	}

	/**
	 * @return RCSPaymentStatusCodeType
	 **/
	function getPaymentStatus()
	{
		return $this->PaymentStatus;
	}

	/**
	 * @return void
	 **/
	function setPaymentStatus($value)
	{
		$this->PaymentStatus = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getAdjustmentAmount()
	{
		return $this->AdjustmentAmount;
	}

	/**
	 * @return void
	 **/
	function setAdjustmentAmount($value)
	{
		$this->AdjustmentAmount = $value;
	}

	/**
	 * @return AddressType
	 **/
	function getShippingAddress()
	{
		return $this->ShippingAddress;
	}

	/**
	 * @return void
	 **/
	function setShippingAddress($value)
	{
		$this->ShippingAddress = $value;
	}

	/**
	 * @return string
	 **/
	function getBuyerID()
	{
		return $this->BuyerID;
	}

	/**
	 * @return void
	 **/
	function setBuyerID($value)
	{
		$this->BuyerID = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getShippingInsuranceCost()
	{
		return $this->ShippingInsuranceCost;
	}

	/**
	 * @return void
	 **/
	function setShippingInsuranceCost($value)
	{
		$this->ShippingInsuranceCost = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getSalesTax()
	{
		return $this->SalesTax;
	}

	/**
	 * @return void
	 **/
	function setSalesTax($value)
	{
		$this->SalesTax = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getShippingCost()
	{
		return $this->ShippingCost;
	}

	/**
	 * @return void
	 **/
	function setShippingCost($value)
	{
		$this->ShippingCost = $value;
	}

	/**
	 * @return string
	 **/
	function getEncryptedID()
	{
		return $this->EncryptedID;
	}

	/**
	 * @return void
	 **/
	function setEncryptedID($value)
	{
		$this->EncryptedID = $value;
	}

	/**
	 * @return ExternalTransactionType
	 **/
	function getExternalTransaction()
	{
		return $this->ExternalTransaction;
	}

	/**
	 * @return void
	 **/
	function setExternalTransaction($value)
	{
		$this->ExternalTransaction = $value;
	}

	/**
	 * @return string
	 **/
	function getMultipleSellerPaymentID()
	{
		return $this->MultipleSellerPaymentID;
	}

	/**
	 * @return void
	 **/
	function setMultipleSellerPaymentID($value)
	{
		$this->MultipleSellerPaymentID = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getCODCost()
	{
		return $this->CODCost;
	}

	/**
	 * @return void
	 **/
	function setCODCost($value)
	{
		$this->CODCost = $value;
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
