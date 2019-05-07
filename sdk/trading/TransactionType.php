<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'UserType.php';
require_once 'ShippingDetailsType.php';
require_once 'DepositTypeCodeType.php';
require_once 'ItemType.php';
require_once 'TransactionStatusType.php';
require_once 'ExternalTransactionType.php';
require_once 'SellingManagerProductDetailsType.php';
require_once 'ShippingServiceOptionsType.php';
require_once 'PaidStatusCodeType.php';
require_once 'FeedbackInfoType.php';
require_once 'OrderType.php';
require_once 'ListingCheckoutRedirectPreferenceType.php';
require_once 'RefundArrayType.php';
require_once 'SiteCodeType.php';
require_once 'TransactionPlatformCodeType.php';
require_once 'VariationType.php';
require_once 'TaxesType.php';
require_once 'PaymentHoldDetailType.php';
require_once 'SellerDiscountsType.php';
require_once 'MultiLegShippingDetailsType.php';
require_once 'UnpaidItemType.php';
require_once 'PaymentsInformationType.php';
require_once 'PickupDetailsType.php';
require_once 'PickupMethodSelectedType.php';
require_once 'BuyerPackageEnclosuresType.php';
require_once 'GiftSummaryType.php';
require_once 'DigitalDeliverySelectedType.php';

/**
  * Contains information about a single order line item (transaction). An order
  * line item contains information about the sale of one or multiple
  * items from a single listing to a single buyer. The eBay system creates an order
  * line item when a buyer has committed to make a purchase in an
  * auction or fixed-price listing. A fixed-priced listing (with multiple identical
  * items or a similar item with variations) can spawn one or more order line items. Auction listings and single-quantity, fixed-price listings can only spawn one order line item.
  * 
 **/

class TransactionType extends EbatNs_ComplexType
{
	/**
	* @var AmountType
	**/
	public $AmountPaid;

	/**
	* @var AmountType
	**/
	public $AdjustmentAmount;

	/**
	* @var AmountType
	**/
	public $ConvertedAdjustmentAmount;

	/**
	* @var UserType
	**/
	public $Buyer;

	/**
	* @var ShippingDetailsType
	**/
	public $ShippingDetails;

	/**
	* @var AmountType
	**/
	public $ConvertedAmountPaid;

	/**
	* @var AmountType
	**/
	public $ConvertedTransactionPrice;

	/**
	* @var dateTime
	**/
	public $CreatedDate;

	/**
	* @var DepositTypeCodeType
	**/
	public $DepositType;

	/**
	* @var ItemType
	**/
	public $Item;

	/**
	* @var int
	**/
	public $QuantityPurchased;

	/**
	* @var TransactionStatusType
	**/
	public $Status;

	/**
	* @var string
	**/
	public $TransactionID;

	/**
	* @var AmountType
	**/
	public $TransactionPrice;

	/**
	* @var boolean
	**/
	public $BestOfferSale;

	/**
	* @var decimal
	**/
	public $VATPercent;

	/**
	* @var ExternalTransactionType
	**/
	public $ExternalTransaction;

	/**
	* @var SellingManagerProductDetailsType
	**/
	public $SellingManagerProductDetails;

	/**
	* @var ShippingServiceOptionsType
	**/
	public $ShippingServiceSelected;

	/**
	* @var string
	**/
	public $BuyerMessage;

	/**
	* @var AmountType
	**/
	public $DutchAuctionBid;

	/**
	* @var PaidStatusCodeType
	**/
	public $BuyerPaidStatus;

	/**
	* @var PaidStatusCodeType
	**/
	public $SellerPaidStatus;

	/**
	* @var dateTime
	**/
	public $PaidTime;

	/**
	* @var dateTime
	**/
	public $ShippedTime;

	/**
	* @var AmountType
	**/
	public $TotalPrice;

	/**
	* @var FeedbackInfoType
	**/
	public $FeedbackLeft;

	/**
	* @var FeedbackInfoType
	**/
	public $FeedbackReceived;

	/**
	* @var OrderType
	**/
	public $ContainingOrder;

	/**
	* @var AmountType
	**/
	public $FinalValueFee;

	/**
	* @var ListingCheckoutRedirectPreferenceType
	**/
	public $ListingCheckoutRedirectPreference;

	/**
	* @var RefundArrayType
	**/
	public $RefundArray;

	/**
	* @var SiteCodeType
	**/
	public $TransactionSiteID;

	/**
	* @var TransactionPlatformCodeType
	**/
	public $Platform;

	/**
	* @var string
	**/
	public $CartID;

	/**
	* @var boolean
	**/
	public $SellerContactBuyerByEmail;

	/**
	* @var string
	**/
	public $PayPalEmailAddress;

	/**
	* @var string
	**/
	public $PaisaPayID;

	/**
	* @var AmountType
	**/
	public $BuyerGuaranteePrice;

	/**
	* @var VariationType
	**/
	public $Variation;

	/**
	* @var string
	**/
	public $BuyerCheckoutMessage;

	/**
	* @var AmountType
	**/
	public $TotalTransactionPrice;

	/**
	* @var TaxesType
	**/
	public $Taxes;

	/**
	* @var boolean
	**/
	public $BundlePurchase;

	/**
	* @var AmountType
	**/
	public $ActualShippingCost;

	/**
	* @var AmountType
	**/
	public $ActualHandlingCost;

	/**
	* @var string
	**/
	public $OrderLineItemID;

	/**
	* @var string
	**/
	public $eBayPaymentID;

	/**
	* @var PaymentHoldDetailType
	**/
	public $PaymentHoldDetails;

	/**
	* @var SellerDiscountsType
	**/
	public $SellerDiscounts;

	/**
	* @var AmountType
	**/
	public $RefundAmount;

	/**
	* @var string
	**/
	public $RefundStatus;

	/**
	* @var string
	**/
	public $CodiceFiscale;

	/**
	* @var boolean
	**/
	public $IsMultiLegShipping;

	/**
	* @var MultiLegShippingDetailsType
	**/
	public $MultiLegShippingDetails;

	/**
	* @var dateTime
	**/
	public $InvoiceSentTime;

	/**
	* @var UnpaidItemType
	**/
	public $UnpaidItem;

	/**
	* @var boolean
	**/
	public $IntangibleItem;

	/**
	* @var PaymentsInformationType
	**/
	public $MonetaryDetails;

	/**
	* @var PickupDetailsType
	**/
	public $PickupDetails;

	/**
	* @var PickupMethodSelectedType
	**/
	public $PickupMethodSelected;

	/**
	* @var AmountType
	**/
	public $ShippingConvenienceCharge;

	/**
	* @var token
	**/
	public $LogisticsPlanType;

	/**
	* @var BuyerPackageEnclosuresType
	**/
	public $BuyerPackageEnclosures;

	/**
	* @var string
	**/
	public $InventoryReservationID;

	/**
	* @var string
	**/
	public $ExtendedOrderID;

	/**
	* @var boolean
	**/
	public $eBayPlusTransaction;

	/**
	* @var GiftSummaryType
	**/
	public $GiftSummary;

	/**
	* @var DigitalDeliverySelectedType
	**/
	public $DigitalDeliverySelected;

	/**
	* @var boolean
	**/
	public $Gift;

	/**
	* @var boolean
	**/
	public $GuaranteedShipping;

	/**
	* @var boolean
	**/
	public $GuaranteedDelivery;

	/**
	* @var boolean
	**/
	public $eBayCollectAndRemitTax;

	/**
	* @var TaxesType
	**/
	public $eBayCollectAndRemitTaxes;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('TransactionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AmountPaid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
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
				'ConvertedAdjustmentAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Buyer' =>
				array(
					'required' => false,
					'type' => 'UserType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingDetails' =>
				array(
					'required' => false,
					'type' => 'ShippingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConvertedAmountPaid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConvertedTransactionPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CreatedDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DepositType' =>
				array(
					'required' => false,
					'type' => 'DepositTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityPurchased' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'TransactionStatusType',
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
				'TransactionPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferSale' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATPercent' =>
				array(
					'required' => false,
					'type' => 'decimal',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalTransaction' =>
				array(
					'required' => false,
					'type' => 'ExternalTransactionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'SellingManagerProductDetails' =>
				array(
					'required' => false,
					'type' => 'SellingManagerProductDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingServiceSelected' =>
				array(
					'required' => false,
					'type' => 'ShippingServiceOptionsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DutchAuctionBid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerPaidStatus' =>
				array(
					'required' => false,
					'type' => 'PaidStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerPaidStatus' =>
				array(
					'required' => false,
					'type' => 'PaidStatusCodeType',
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
				'ShippedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackLeft' =>
				array(
					'required' => false,
					'type' => 'FeedbackInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackReceived' =>
				array(
					'required' => false,
					'type' => 'FeedbackInfoType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ContainingOrder' =>
				array(
					'required' => false,
					'type' => 'OrderType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FinalValueFee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingCheckoutRedirectPreference' =>
				array(
					'required' => false,
					'type' => 'ListingCheckoutRedirectPreferenceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundArray' =>
				array(
					'required' => false,
					'type' => 'RefundArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionSiteID' =>
				array(
					'required' => false,
					'type' => 'SiteCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Platform' =>
				array(
					'required' => false,
					'type' => 'TransactionPlatformCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CartID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerContactBuyerByEmail' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalEmailAddress' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaisaPayID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerGuaranteePrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Variation' =>
				array(
					'required' => false,
					'type' => 'VariationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerCheckoutMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalTransactionPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Taxes' =>
				array(
					'required' => false,
					'type' => 'TaxesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BundlePurchase' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ActualShippingCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ActualHandlingCost' =>
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
				),
				'eBayPaymentID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentHoldDetails' =>
				array(
					'required' => false,
					'type' => 'PaymentHoldDetailType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerDiscounts' =>
				array(
					'required' => false,
					'type' => 'SellerDiscountsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundStatus' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CodiceFiscale' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IsMultiLegShipping' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MultiLegShippingDetails' =>
				array(
					'required' => false,
					'type' => 'MultiLegShippingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InvoiceSentTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UnpaidItem' =>
				array(
					'required' => false,
					'type' => 'UnpaidItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IntangibleItem' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MonetaryDetails' =>
				array(
					'required' => false,
					'type' => 'PaymentsInformationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PickupDetails' =>
				array(
					'required' => false,
					'type' => 'PickupDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PickupMethodSelected' =>
				array(
					'required' => false,
					'type' => 'PickupMethodSelectedType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingConvenienceCharge' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LogisticsPlanType' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerPackageEnclosures' =>
				array(
					'required' => false,
					'type' => 'BuyerPackageEnclosuresType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InventoryReservationID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExtendedOrderID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayPlusTransaction' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GiftSummary' =>
				array(
					'required' => false,
					'type' => 'GiftSummaryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DigitalDeliverySelected' =>
				array(
					'required' => false,
					'type' => 'DigitalDeliverySelectedType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Gift' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GuaranteedShipping' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GuaranteedDelivery' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayCollectAndRemitTax' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayCollectAndRemitTaxes' =>
				array(
					'required' => false,
					'type' => 'TaxesType',
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
	 * @return AmountType
	 **/
	function getConvertedAdjustmentAmount()
	{
		return $this->ConvertedAdjustmentAmount;
	}

	/**
	 * @return void
	 **/
	function setConvertedAdjustmentAmount($value)
	{
		$this->ConvertedAdjustmentAmount = $value;
	}

	/**
	 * @return UserType
	 **/
	function getBuyer()
	{
		return $this->Buyer;
	}

	/**
	 * @return void
	 **/
	function setBuyer($value)
	{
		$this->Buyer = $value;
	}

	/**
	 * @return ShippingDetailsType
	 **/
	function getShippingDetails()
	{
		return $this->ShippingDetails;
	}

	/**
	 * @return void
	 **/
	function setShippingDetails($value)
	{
		$this->ShippingDetails = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getConvertedAmountPaid()
	{
		return $this->ConvertedAmountPaid;
	}

	/**
	 * @return void
	 **/
	function setConvertedAmountPaid($value)
	{
		$this->ConvertedAmountPaid = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getConvertedTransactionPrice()
	{
		return $this->ConvertedTransactionPrice;
	}

	/**
	 * @return void
	 **/
	function setConvertedTransactionPrice($value)
	{
		$this->ConvertedTransactionPrice = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getCreatedDate()
	{
		return $this->CreatedDate;
	}

	/**
	 * @return void
	 **/
	function setCreatedDate($value)
	{
		$this->CreatedDate = $value;
	}

	/**
	 * @return DepositTypeCodeType
	 **/
	function getDepositType()
	{
		return $this->DepositType;
	}

	/**
	 * @return void
	 **/
	function setDepositType($value)
	{
		$this->DepositType = $value;
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

	/**
	 * @return int
	 **/
	function getQuantityPurchased()
	{
		return $this->QuantityPurchased;
	}

	/**
	 * @return void
	 **/
	function setQuantityPurchased($value)
	{
		$this->QuantityPurchased = $value;
	}

	/**
	 * @return TransactionStatusType
	 **/
	function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @return void
	 **/
	function setStatus($value)
	{
		$this->Status = $value;
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
	 * @return boolean
	 **/
	function getBestOfferSale()
	{
		return $this->BestOfferSale;
	}

	/**
	 * @return void
	 **/
	function setBestOfferSale($value)
	{
		$this->BestOfferSale = $value;
	}

	/**
	 * @return decimal
	 **/
	function getVATPercent()
	{
		return $this->VATPercent;
	}

	/**
	 * @return void
	 **/
	function setVATPercent($value)
	{
		$this->VATPercent = $value;
	}

	/**
	 * @return ExternalTransactionType
	 * @param integer $index 
	 **/
	function getExternalTransaction($index = null)
	{
		if ($index !== null)
		{
			return $this->ExternalTransaction[$index];
		}
		else
		{
			return $this->ExternalTransaction;
		}
	}

	/**
	 * @return void
	 * @param ExternalTransactionType $value
	 * @param integer $index 
	 **/
	function setExternalTransaction($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ExternalTransaction[$index] = $value;
		}
		else
		{
			$this->ExternalTransaction= $value;
		}
	}

	/**
	 * @return void
	 * @param ExternalTransactionType $value
	 **/
	function addExternalTransaction($value)
	{
		$this->ExternalTransaction[] = $value;
	}

	/**
	 * @return SellingManagerProductDetailsType
	 **/
	function getSellingManagerProductDetails()
	{
		return $this->SellingManagerProductDetails;
	}

	/**
	 * @return void
	 **/
	function setSellingManagerProductDetails($value)
	{
		$this->SellingManagerProductDetails = $value;
	}

	/**
	 * @return ShippingServiceOptionsType
	 **/
	function getShippingServiceSelected()
	{
		return $this->ShippingServiceSelected;
	}

	/**
	 * @return void
	 **/
	function setShippingServiceSelected($value)
	{
		$this->ShippingServiceSelected = $value;
	}

	/**
	 * @return string
	 **/
	function getBuyerMessage()
	{
		return $this->BuyerMessage;
	}

	/**
	 * @return void
	 **/
	function setBuyerMessage($value)
	{
		$this->BuyerMessage = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getDutchAuctionBid()
	{
		return $this->DutchAuctionBid;
	}

	/**
	 * @return void
	 **/
	function setDutchAuctionBid($value)
	{
		$this->DutchAuctionBid = $value;
	}

	/**
	 * @return PaidStatusCodeType
	 **/
	function getBuyerPaidStatus()
	{
		return $this->BuyerPaidStatus;
	}

	/**
	 * @return void
	 **/
	function setBuyerPaidStatus($value)
	{
		$this->BuyerPaidStatus = $value;
	}

	/**
	 * @return PaidStatusCodeType
	 **/
	function getSellerPaidStatus()
	{
		return $this->SellerPaidStatus;
	}

	/**
	 * @return void
	 **/
	function setSellerPaidStatus($value)
	{
		$this->SellerPaidStatus = $value;
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
	 * @return dateTime
	 **/
	function getShippedTime()
	{
		return $this->ShippedTime;
	}

	/**
	 * @return void
	 **/
	function setShippedTime($value)
	{
		$this->ShippedTime = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalPrice()
	{
		return $this->TotalPrice;
	}

	/**
	 * @return void
	 **/
	function setTotalPrice($value)
	{
		$this->TotalPrice = $value;
	}

	/**
	 * @return FeedbackInfoType
	 **/
	function getFeedbackLeft()
	{
		return $this->FeedbackLeft;
	}

	/**
	 * @return void
	 **/
	function setFeedbackLeft($value)
	{
		$this->FeedbackLeft = $value;
	}

	/**
	 * @return FeedbackInfoType
	 **/
	function getFeedbackReceived()
	{
		return $this->FeedbackReceived;
	}

	/**
	 * @return void
	 **/
	function setFeedbackReceived($value)
	{
		$this->FeedbackReceived = $value;
	}

	/**
	 * @return OrderType
	 **/
	function getContainingOrder()
	{
		return $this->ContainingOrder;
	}

	/**
	 * @return void
	 **/
	function setContainingOrder($value)
	{
		$this->ContainingOrder = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getFinalValueFee()
	{
		return $this->FinalValueFee;
	}

	/**
	 * @return void
	 **/
	function setFinalValueFee($value)
	{
		$this->FinalValueFee = $value;
	}

	/**
	 * @return ListingCheckoutRedirectPreferenceType
	 **/
	function getListingCheckoutRedirectPreference()
	{
		return $this->ListingCheckoutRedirectPreference;
	}

	/**
	 * @return void
	 **/
	function setListingCheckoutRedirectPreference($value)
	{
		$this->ListingCheckoutRedirectPreference = $value;
	}

	/**
	 * @return RefundArrayType
	 **/
	function getRefundArray()
	{
		return $this->RefundArray;
	}

	/**
	 * @return void
	 **/
	function setRefundArray($value)
	{
		$this->RefundArray = $value;
	}

	/**
	 * @return SiteCodeType
	 **/
	function getTransactionSiteID()
	{
		return $this->TransactionSiteID;
	}

	/**
	 * @return void
	 **/
	function setTransactionSiteID($value)
	{
		$this->TransactionSiteID = $value;
	}

	/**
	 * @return TransactionPlatformCodeType
	 **/
	function getPlatform()
	{
		return $this->Platform;
	}

	/**
	 * @return void
	 **/
	function setPlatform($value)
	{
		$this->Platform = $value;
	}

	/**
	 * @return string
	 **/
	function getCartID()
	{
		return $this->CartID;
	}

	/**
	 * @return void
	 **/
	function setCartID($value)
	{
		$this->CartID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSellerContactBuyerByEmail()
	{
		return $this->SellerContactBuyerByEmail;
	}

	/**
	 * @return void
	 **/
	function setSellerContactBuyerByEmail($value)
	{
		$this->SellerContactBuyerByEmail = $value;
	}

	/**
	 * @return string
	 **/
	function getPayPalEmailAddress()
	{
		return $this->PayPalEmailAddress;
	}

	/**
	 * @return void
	 **/
	function setPayPalEmailAddress($value)
	{
		$this->PayPalEmailAddress = $value;
	}

	/**
	 * @return string
	 **/
	function getPaisaPayID()
	{
		return $this->PaisaPayID;
	}

	/**
	 * @return void
	 **/
	function setPaisaPayID($value)
	{
		$this->PaisaPayID = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getBuyerGuaranteePrice()
	{
		return $this->BuyerGuaranteePrice;
	}

	/**
	 * @return void
	 **/
	function setBuyerGuaranteePrice($value)
	{
		$this->BuyerGuaranteePrice = $value;
	}

	/**
	 * @return VariationType
	 **/
	function getVariation()
	{
		return $this->Variation;
	}

	/**
	 * @return void
	 **/
	function setVariation($value)
	{
		$this->Variation = $value;
	}

	/**
	 * @return string
	 **/
	function getBuyerCheckoutMessage()
	{
		return $this->BuyerCheckoutMessage;
	}

	/**
	 * @return void
	 **/
	function setBuyerCheckoutMessage($value)
	{
		$this->BuyerCheckoutMessage = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalTransactionPrice()
	{
		return $this->TotalTransactionPrice;
	}

	/**
	 * @return void
	 **/
	function setTotalTransactionPrice($value)
	{
		$this->TotalTransactionPrice = $value;
	}

	/**
	 * @return TaxesType
	 **/
	function getTaxes()
	{
		return $this->Taxes;
	}

	/**
	 * @return void
	 **/
	function setTaxes($value)
	{
		$this->Taxes = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBundlePurchase()
	{
		return $this->BundlePurchase;
	}

	/**
	 * @return void
	 **/
	function setBundlePurchase($value)
	{
		$this->BundlePurchase = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getActualShippingCost()
	{
		return $this->ActualShippingCost;
	}

	/**
	 * @return void
	 **/
	function setActualShippingCost($value)
	{
		$this->ActualShippingCost = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getActualHandlingCost()
	{
		return $this->ActualHandlingCost;
	}

	/**
	 * @return void
	 **/
	function setActualHandlingCost($value)
	{
		$this->ActualHandlingCost = $value;
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

	/**
	 * @return string
	 **/
	function geteBayPaymentID()
	{
		return $this->eBayPaymentID;
	}

	/**
	 * @return void
	 **/
	function seteBayPaymentID($value)
	{
		$this->eBayPaymentID = $value;
	}

	/**
	 * @return PaymentHoldDetailType
	 **/
	function getPaymentHoldDetails()
	{
		return $this->PaymentHoldDetails;
	}

	/**
	 * @return void
	 **/
	function setPaymentHoldDetails($value)
	{
		$this->PaymentHoldDetails = $value;
	}

	/**
	 * @return SellerDiscountsType
	 **/
	function getSellerDiscounts()
	{
		return $this->SellerDiscounts;
	}

	/**
	 * @return void
	 **/
	function setSellerDiscounts($value)
	{
		$this->SellerDiscounts = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getRefundAmount()
	{
		return $this->RefundAmount;
	}

	/**
	 * @return void
	 **/
	function setRefundAmount($value)
	{
		$this->RefundAmount = $value;
	}

	/**
	 * @return string
	 **/
	function getRefundStatus()
	{
		return $this->RefundStatus;
	}

	/**
	 * @return void
	 **/
	function setRefundStatus($value)
	{
		$this->RefundStatus = $value;
	}

	/**
	 * @return string
	 **/
	function getCodiceFiscale()
	{
		return $this->CodiceFiscale;
	}

	/**
	 * @return void
	 **/
	function setCodiceFiscale($value)
	{
		$this->CodiceFiscale = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIsMultiLegShipping()
	{
		return $this->IsMultiLegShipping;
	}

	/**
	 * @return void
	 **/
	function setIsMultiLegShipping($value)
	{
		$this->IsMultiLegShipping = $value;
	}

	/**
	 * @return MultiLegShippingDetailsType
	 **/
	function getMultiLegShippingDetails()
	{
		return $this->MultiLegShippingDetails;
	}

	/**
	 * @return void
	 **/
	function setMultiLegShippingDetails($value)
	{
		$this->MultiLegShippingDetails = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getInvoiceSentTime()
	{
		return $this->InvoiceSentTime;
	}

	/**
	 * @return void
	 **/
	function setInvoiceSentTime($value)
	{
		$this->InvoiceSentTime = $value;
	}

	/**
	 * @return UnpaidItemType
	 **/
	function getUnpaidItem()
	{
		return $this->UnpaidItem;
	}

	/**
	 * @return void
	 **/
	function setUnpaidItem($value)
	{
		$this->UnpaidItem = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIntangibleItem()
	{
		return $this->IntangibleItem;
	}

	/**
	 * @return void
	 **/
	function setIntangibleItem($value)
	{
		$this->IntangibleItem = $value;
	}

	/**
	 * @return PaymentsInformationType
	 **/
	function getMonetaryDetails()
	{
		return $this->MonetaryDetails;
	}

	/**
	 * @return void
	 **/
	function setMonetaryDetails($value)
	{
		$this->MonetaryDetails = $value;
	}

	/**
	 * @return PickupDetailsType
	 **/
	function getPickupDetails()
	{
		return $this->PickupDetails;
	}

	/**
	 * @return void
	 **/
	function setPickupDetails($value)
	{
		$this->PickupDetails = $value;
	}

	/**
	 * @return PickupMethodSelectedType
	 **/
	function getPickupMethodSelected()
	{
		return $this->PickupMethodSelected;
	}

	/**
	 * @return void
	 **/
	function setPickupMethodSelected($value)
	{
		$this->PickupMethodSelected = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getShippingConvenienceCharge()
	{
		return $this->ShippingConvenienceCharge;
	}

	/**
	 * @return void
	 **/
	function setShippingConvenienceCharge($value)
	{
		$this->ShippingConvenienceCharge = $value;
	}

	/**
	 * @return token
	 **/
	function getLogisticsPlanType()
	{
		return $this->LogisticsPlanType;
	}

	/**
	 * @return void
	 **/
	function setLogisticsPlanType($value)
	{
		$this->LogisticsPlanType = $value;
	}

	/**
	 * @return BuyerPackageEnclosuresType
	 **/
	function getBuyerPackageEnclosures()
	{
		return $this->BuyerPackageEnclosures;
	}

	/**
	 * @return void
	 **/
	function setBuyerPackageEnclosures($value)
	{
		$this->BuyerPackageEnclosures = $value;
	}

	/**
	 * @return string
	 **/
	function getInventoryReservationID()
	{
		return $this->InventoryReservationID;
	}

	/**
	 * @return void
	 **/
	function setInventoryReservationID($value)
	{
		$this->InventoryReservationID = $value;
	}

	/**
	 * @return string
	 **/
	function getExtendedOrderID()
	{
		return $this->ExtendedOrderID;
	}

	/**
	 * @return void
	 **/
	function setExtendedOrderID($value)
	{
		$this->ExtendedOrderID = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayPlusTransaction()
	{
		return $this->eBayPlusTransaction;
	}

	/**
	 * @return void
	 **/
	function seteBayPlusTransaction($value)
	{
		$this->eBayPlusTransaction = $value;
	}

	/**
	 * @return GiftSummaryType
	 **/
	function getGiftSummary()
	{
		return $this->GiftSummary;
	}

	/**
	 * @return void
	 **/
	function setGiftSummary($value)
	{
		$this->GiftSummary = $value;
	}

	/**
	 * @return DigitalDeliverySelectedType
	 **/
	function getDigitalDeliverySelected()
	{
		return $this->DigitalDeliverySelected;
	}

	/**
	 * @return void
	 **/
	function setDigitalDeliverySelected($value)
	{
		$this->DigitalDeliverySelected = $value;
	}

	/**
	 * @return boolean
	 **/
	function getGift()
	{
		return $this->Gift;
	}

	/**
	 * @return void
	 **/
	function setGift($value)
	{
		$this->Gift = $value;
	}

	/**
	 * @return boolean
	 **/
	function getGuaranteedShipping()
	{
		return $this->GuaranteedShipping;
	}

	/**
	 * @return void
	 **/
	function setGuaranteedShipping($value)
	{
		$this->GuaranteedShipping = $value;
	}

	/**
	 * @return boolean
	 **/
	function getGuaranteedDelivery()
	{
		return $this->GuaranteedDelivery;
	}

	/**
	 * @return void
	 **/
	function setGuaranteedDelivery($value)
	{
		$this->GuaranteedDelivery = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayCollectAndRemitTax()
	{
		return $this->eBayCollectAndRemitTax;
	}

	/**
	 * @return void
	 **/
	function seteBayCollectAndRemitTax($value)
	{
		$this->eBayCollectAndRemitTax = $value;
	}

	/**
	 * @return TaxesType
	 **/
	function geteBayCollectAndRemitTaxes()
	{
		return $this->eBayCollectAndRemitTaxes;
	}

	/**
	 * @return void
	 **/
	function seteBayCollectAndRemitTaxes($value)
	{
		$this->eBayCollectAndRemitTaxes = $value;
	}

}
?>
