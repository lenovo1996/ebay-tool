<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ListingDurationReferenceType.php';
require_once 'AdFormatEnabledCodeType.php';
require_once 'ClassifiedAdPaymentMethodEnabledCodeType.php';
require_once 'ClassifiedAdBestOfferEnabledCodeType.php';
require_once 'ItemSpecificsEnabledCodeType.php';
require_once 'ListingEnhancementDurationReferenceType.php';
require_once 'GeographicExposureCodeType.php';
require_once 'INEscrowWorkflowTimelineCodeType.php';
require_once 'StoreOwnerExtendedListingDurationsType.php';
require_once 'AmountType.php';
require_once 'BuyerPaymentMethodCodeType.php';
require_once 'AttributeConversionEnabledCodeType.php';
require_once 'ItemCompatibilityEnabledCodeType.php';
require_once 'ConditionEnabledCodeType.php';
require_once 'ConditionValuesType.php';
require_once 'ProductCreationEnabledCodeType.php';
require_once 'ProductIdentiferEnabledCodeType.php';
require_once 'PaymentOptionsGroupEnabledCodeType.php';
require_once 'ProfileCategoryGroupCodeType.php';
require_once 'ProductRequiredEnabledCodeType.php';
require_once 'DomesticReturnsAcceptedCodeType.php';
require_once 'InternationalReturnsAcceptedCodeType.php';
require_once 'DomesticReturnsDurationCodeType.php';
require_once 'InternationalReturnsDurationCodeType.php';
require_once 'DomesticReturnsShipmentPayeeCodeType.php';
require_once 'InternationalReturnsShipmentPayeeCodeType.php';
require_once 'DomesticRefundMethodCodeType.php';
require_once 'InternationalRefundMethodCodeType.php';

/**
  * Type defining the <b>Category</b> container that is returned in the <b>GetCategoryFeatures</b> response. A <b>Category</b> node is returned for each category that is relevant/applicable to the input criteria in the <b>GetCategoryFeatures</b> request. The <b>CategoryID</b> value identifies the eBay category. The rest of the <b>CategoryFeatureType</b> fields that are returned will be dependent on which <b>FeatureID</b> value(s) are specified in the <b>GetCategoryFeatures</b> request.
  * 
 **/

class CategoryFeatureType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	public $CategoryID;

	/**
	* @var ListingDurationReferenceType
	**/
	public $ListingDuration;

	/**
	* @var boolean
	**/
	public $ShippingTermsRequired;

	/**
	* @var boolean
	**/
	public $BestOfferEnabled;

	/**
	* @var boolean
	**/
	public $DutchBINEnabled;

	/**
	* @var boolean
	**/
	public $UserConsentRequired;

	/**
	* @var boolean
	**/
	public $HomePageFeaturedEnabled;

	/**
	* @var boolean
	**/
	public $ProPackEnabled;

	/**
	* @var boolean
	**/
	public $BasicUpgradePackEnabled;

	/**
	* @var boolean
	**/
	public $ValuePackEnabled;

	/**
	* @var boolean
	**/
	public $ProPackPlusEnabled;

	/**
	* @var AdFormatEnabledCodeType
	**/
	public $AdFormatEnabled;

	/**
	* @var boolean
	**/
	public $BestOfferCounterEnabled;

	/**
	* @var boolean
	**/
	public $BestOfferAutoDeclineEnabled;

	/**
	* @var boolean
	**/
	public $LocalMarketSpecialitySubscription;

	/**
	* @var boolean
	**/
	public $LocalMarketRegularSubscription;

	/**
	* @var boolean
	**/
	public $LocalMarketPremiumSubscription;

	/**
	* @var boolean
	**/
	public $LocalMarketNonSubscription;

	/**
	* @var boolean
	**/
	public $ExpressEnabled;

	/**
	* @var boolean
	**/
	public $ExpressPicturesRequired;

	/**
	* @var boolean
	**/
	public $ExpressConditionRequired;

	/**
	* @var double
	**/
	public $MinimumReservePrice;

	/**
	* @var boolean
	**/
	public $SellerContactDetailsEnabled;

	/**
	* @var boolean
	**/
	public $TransactionConfirmationRequestEnabled;

	/**
	* @var boolean
	**/
	public $StoreInventoryEnabled;

	/**
	* @var boolean
	**/
	public $SkypeMeTransactionalEnabled;

	/**
	* @var boolean
	**/
	public $SkypeMeNonTransactionalEnabled;

	/**
	* @var ClassifiedAdPaymentMethodEnabledCodeType
	**/
	public $ClassifiedAdPaymentMethodEnabled;

	/**
	* @var boolean
	**/
	public $ClassifiedAdShippingMethodEnabled;

	/**
	* @var ClassifiedAdBestOfferEnabledCodeType
	**/
	public $ClassifiedAdBestOfferEnabled;

	/**
	* @var boolean
	**/
	public $ClassifiedAdCounterOfferEnabled;

	/**
	* @var boolean
	**/
	public $ClassifiedAdAutoDeclineEnabled;

	/**
	* @var boolean
	**/
	public $ClassifiedAdContactByPhoneEnabled;

	/**
	* @var boolean
	**/
	public $ClassifiedAdContactByEmailEnabled;

	/**
	* @var boolean
	**/
	public $SafePaymentRequired;

	/**
	* @var boolean
	**/
	public $ClassifiedAdPayPerLeadEnabled;

	/**
	* @var ItemSpecificsEnabledCodeType
	**/
	public $ItemSpecificsEnabled;

	/**
	* @var boolean
	**/
	public $PaisaPayFullEscrowEnabled;

	/**
	* @var boolean
	**/
	public $BrandMPNIdentifierEnabled;

	/**
	* @var boolean
	**/
	public $ClassifiedAdAutoAcceptEnabled;

	/**
	* @var boolean
	**/
	public $BestOfferAutoAcceptEnabled;

	/**
	* @var boolean
	**/
	public $CrossBorderTradeNorthAmericaEnabled;

	/**
	* @var boolean
	**/
	public $CrossBorderTradeGBEnabled;

	/**
	* @var boolean
	**/
	public $CrossBorderTradeAustraliaEnabled;

	/**
	* @var boolean
	**/
	public $PayPalBuyerProtectionEnabled;

	/**
	* @var boolean
	**/
	public $BuyerGuaranteeEnabled;

	/**
	* @var boolean
	**/
	public $CombinedFixedPriceTreatmentEnabled;

	/**
	* @var ListingEnhancementDurationReferenceType
	**/
	public $GalleryFeaturedDurations;

	/**
	* @var boolean
	**/
	public $PayPalRequired;

	/**
	* @var AdFormatEnabledCodeType
	**/
	public $eBayMotorsProAdFormatEnabled;

	/**
	* @var boolean
	**/
	public $eBayMotorsProContactByPhoneEnabled;

	/**
	* @var int
	**/
	public $eBayMotorsProPhoneCount;

	/**
	* @var boolean
	**/
	public $eBayMotorsProContactByAddressEnabled;

	/**
	* @var int
	**/
	public $eBayMotorsProStreetCount;

	/**
	* @var boolean
	**/
	public $eBayMotorsProCompanyNameEnabled;

	/**
	* @var boolean
	**/
	public $eBayMotorsProContactByEmailEnabled;

	/**
	* @var ClassifiedAdBestOfferEnabledCodeType
	**/
	public $eBayMotorsProBestOfferEnabled;

	/**
	* @var boolean
	**/
	public $eBayMotorsProAutoAcceptEnabled;

	/**
	* @var boolean
	**/
	public $eBayMotorsProAutoDeclineEnabled;

	/**
	* @var ClassifiedAdPaymentMethodEnabledCodeType
	**/
	public $eBayMotorsProPaymentMethodCheckOutEnabled;

	/**
	* @var boolean
	**/
	public $eBayMotorsProShippingMethodEnabled;

	/**
	* @var boolean
	**/
	public $eBayMotorsProCounterOfferEnabled;

	/**
	* @var boolean
	**/
	public $eBayMotorsProSellerContactDetailsEnabled;

	/**
	* @var AdFormatEnabledCodeType
	**/
	public $LocalMarketAdFormatEnabled;

	/**
	* @var boolean
	**/
	public $LocalMarketContactByPhoneEnabled;

	/**
	* @var int
	**/
	public $LocalMarketPhoneCount;

	/**
	* @var boolean
	**/
	public $LocalMarketContactByAddressEnabled;

	/**
	* @var int
	**/
	public $LocalMarketStreetCount;

	/**
	* @var boolean
	**/
	public $LocalMarketCompanyNameEnabled;

	/**
	* @var boolean
	**/
	public $LocalMarketContactByEmailEnabled;

	/**
	* @var ClassifiedAdBestOfferEnabledCodeType
	**/
	public $LocalMarketBestOfferEnabled;

	/**
	* @var boolean
	**/
	public $LocalMarketAutoAcceptEnabled;

	/**
	* @var boolean
	**/
	public $LocalMarketAutoDeclineEnabled;

	/**
	* @var ClassifiedAdPaymentMethodEnabledCodeType
	**/
	public $LocalMarketPaymentMethodCheckOutEnabled;

	/**
	* @var boolean
	**/
	public $LocalMarketShippingMethodEnabled;

	/**
	* @var boolean
	**/
	public $LocalMarketCounterOfferEnabled;

	/**
	* @var boolean
	**/
	public $LocalMarketSellerContactDetailsEnabled;

	/**
	* @var int
	**/
	public $ClassifiedAdPhoneCount;

	/**
	* @var boolean
	**/
	public $ClassifiedAdContactByAddressEnabled;

	/**
	* @var int
	**/
	public $ClassifiedAdStreetCount;

	/**
	* @var boolean
	**/
	public $ClassifiedAdCompanyNameEnabled;

	/**
	* @var GeographicExposureCodeType
	**/
	public $SpecialitySubscription;

	/**
	* @var GeographicExposureCodeType
	**/
	public $RegularSubscription;

	/**
	* @var GeographicExposureCodeType
	**/
	public $PremiumSubscription;

	/**
	* @var GeographicExposureCodeType
	**/
	public $NonSubscription;

	/**
	* @var INEscrowWorkflowTimelineCodeType
	**/
	public $INEscrowWorkflowTimeline;

	/**
	* @var boolean
	**/
	public $PayPalRequiredForStoreOwner;

	/**
	* @var boolean
	**/
	public $ReviseQuantityAllowed;

	/**
	* @var boolean
	**/
	public $RevisePriceAllowed;

	/**
	* @var boolean
	**/
	public $StoreOwnerExtendedListingDurationsEnabled;

	/**
	* @var StoreOwnerExtendedListingDurationsType
	**/
	public $StoreOwnerExtendedListingDurations;

	/**
	* @var boolean
	**/
	public $ReturnPolicyEnabled;

	/**
	* @var boolean
	**/
	public $HandlingTimeEnabled;

	/**
	* @var AmountType
	**/
	public $MaxFlatShippingCost;

	/**
	* @var AmountType
	**/
	public $Group1MaxFlatShippingCost;

	/**
	* @var AmountType
	**/
	public $Group2MaxFlatShippingCost;

	/**
	* @var AmountType
	**/
	public $Group3MaxFlatShippingCost;

	/**
	* @var BuyerPaymentMethodCodeType
	**/
	public $PaymentMethod;

	/**
	* @var boolean
	**/
	public $VariationsEnabled;

	/**
	* @var AttributeConversionEnabledCodeType
	**/
	public $AttributeConversionEnabled;

	/**
	* @var boolean
	**/
	public $FreeGalleryPlusEnabled;

	/**
	* @var boolean
	**/
	public $FreePicturePackEnabled;

	/**
	* @var ItemCompatibilityEnabledCodeType
	**/
	public $ItemCompatibilityEnabled;

	/**
	* @var int
	**/
	public $MinItemCompatibility;

	/**
	* @var int
	**/
	public $MaxItemCompatibility;

	/**
	* @var ConditionEnabledCodeType
	**/
	public $ConditionEnabled;

	/**
	* @var ConditionValuesType
	**/
	public $ConditionValues;

	/**
	* @var boolean
	**/
	public $ValueCategory;

	/**
	* @var ProductCreationEnabledCodeType
	**/
	public $ProductCreationEnabled;

	/**
	* @var ProductIdentiferEnabledCodeType
	**/
	public $EANEnabled;

	/**
	* @var ProductIdentiferEnabledCodeType
	**/
	public $ISBNEnabled;

	/**
	* @var ProductIdentiferEnabledCodeType
	**/
	public $UPCEnabled;

	/**
	* @var int
	**/
	public $MaxGranularFitmentCount;

	/**
	* @var string
	**/
	public $CompatibleVehicleType;

	/**
	* @var PaymentOptionsGroupEnabledCodeType
	**/
	public $PaymentOptionsGroup;

	/**
	* @var ProfileCategoryGroupCodeType
	**/
	public $ShippingProfileCategoryGroup;

	/**
	* @var ProfileCategoryGroupCodeType
	**/
	public $PaymentProfileCategoryGroup;

	/**
	* @var ProfileCategoryGroupCodeType
	**/
	public $ReturnPolicyProfileCategoryGroup;

	/**
	* @var boolean
	**/
	public $VINSupported;

	/**
	* @var boolean
	**/
	public $VRMSupported;

	/**
	* @var boolean
	**/
	public $SellerProvidedTitleSupported;

	/**
	* @var boolean
	**/
	public $DepositSupported;

	/**
	* @var boolean
	**/
	public $GlobalShippingEnabled;

	/**
	* @var boolean
	**/
	public $AdditionalCompatibilityEnabled;

	/**
	* @var boolean
	**/
	public $PickupDropOffEnabled;

	/**
	* @var boolean
	**/
	public $DigitalGoodDeliveryEnabled;

	/**
	* @var boolean
	**/
	public $EpidSupported;

	/**
	* @var boolean
	**/
	public $KTypeSupported;

	/**
	* @var ProductRequiredEnabledCodeType
	**/
	public $ProductRequiredEnabled;

	/**
	* @var DomesticReturnsAcceptedCodeType
	**/
	public $DomesticReturnsAcceptedValues;

	/**
	* @var InternationalReturnsAcceptedCodeType
	**/
	public $InternationalReturnsAcceptedValues;

	/**
	* @var DomesticReturnsDurationCodeType
	**/
	public $DomesticReturnsDurationValues;

	/**
	* @var InternationalReturnsDurationCodeType
	**/
	public $InternationalReturnsDurationValues;

	/**
	* @var DomesticReturnsShipmentPayeeCodeType
	**/
	public $DomesticReturnsShipmentPayeeValues;

	/**
	* @var InternationalReturnsShipmentPayeeCodeType
	**/
	public $InternationalReturnsShipmentPayeeValues;

	/**
	* @var DomesticRefundMethodCodeType
	**/
	public $DomesticRefundMethodValues;

	/**
	* @var InternationalRefundMethodCodeType
	**/
	public $InternationalRefundMethodValues;

	/**
	* @var boolean
	**/
	public $ReturnPolicyDescriptionEnabled;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CategoryFeatureType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingDuration' =>
				array(
					'required' => false,
					'type' => 'ListingDurationReferenceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ShippingTermsRequired' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DutchBINEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserConsentRequired' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HomePageFeaturedEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProPackEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BasicUpgradePackEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ValuePackEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProPackPlusEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AdFormatEnabled' =>
				array(
					'required' => false,
					'type' => 'AdFormatEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferCounterEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferAutoDeclineEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketSpecialitySubscription' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketRegularSubscription' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketPremiumSubscription' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketNonSubscription' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressPicturesRequired' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpressConditionRequired' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MinimumReservePrice' =>
				array(
					'required' => false,
					'type' => 'double',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerContactDetailsEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionConfirmationRequestEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreInventoryEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SkypeMeTransactionalEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SkypeMeNonTransactionalEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdPaymentMethodEnabled' =>
				array(
					'required' => false,
					'type' => 'ClassifiedAdPaymentMethodEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdShippingMethodEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdBestOfferEnabled' =>
				array(
					'required' => false,
					'type' => 'ClassifiedAdBestOfferEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdCounterOfferEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdAutoDeclineEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdContactByPhoneEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdContactByEmailEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SafePaymentRequired' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdPayPerLeadEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemSpecificsEnabled' =>
				array(
					'required' => false,
					'type' => 'ItemSpecificsEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaisaPayFullEscrowEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BrandMPNIdentifierEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdAutoAcceptEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferAutoAcceptEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CrossBorderTradeNorthAmericaEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CrossBorderTradeGBEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CrossBorderTradeAustraliaEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalBuyerProtectionEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerGuaranteeEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CombinedFixedPriceTreatmentEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GalleryFeaturedDurations' =>
				array(
					'required' => false,
					'type' => 'ListingEnhancementDurationReferenceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalRequired' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayMotorsProAdFormatEnabled' =>
				array(
					'required' => false,
					'type' => 'AdFormatEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayMotorsProContactByPhoneEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayMotorsProPhoneCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayMotorsProContactByAddressEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayMotorsProStreetCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayMotorsProCompanyNameEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayMotorsProContactByEmailEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayMotorsProBestOfferEnabled' =>
				array(
					'required' => false,
					'type' => 'ClassifiedAdBestOfferEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayMotorsProAutoAcceptEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayMotorsProAutoDeclineEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayMotorsProPaymentMethodCheckOutEnabled' =>
				array(
					'required' => false,
					'type' => 'ClassifiedAdPaymentMethodEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayMotorsProShippingMethodEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayMotorsProCounterOfferEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'eBayMotorsProSellerContactDetailsEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketAdFormatEnabled' =>
				array(
					'required' => false,
					'type' => 'AdFormatEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketContactByPhoneEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketPhoneCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketContactByAddressEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketStreetCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketCompanyNameEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketContactByEmailEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketBestOfferEnabled' =>
				array(
					'required' => false,
					'type' => 'ClassifiedAdBestOfferEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketAutoAcceptEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketAutoDeclineEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketPaymentMethodCheckOutEnabled' =>
				array(
					'required' => false,
					'type' => 'ClassifiedAdPaymentMethodEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketShippingMethodEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketCounterOfferEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LocalMarketSellerContactDetailsEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdPhoneCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdContactByAddressEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdStreetCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdCompanyNameEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SpecialitySubscription' =>
				array(
					'required' => false,
					'type' => 'GeographicExposureCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RegularSubscription' =>
				array(
					'required' => false,
					'type' => 'GeographicExposureCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PremiumSubscription' =>
				array(
					'required' => false,
					'type' => 'GeographicExposureCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NonSubscription' =>
				array(
					'required' => false,
					'type' => 'GeographicExposureCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'INEscrowWorkflowTimeline' =>
				array(
					'required' => false,
					'type' => 'INEscrowWorkflowTimelineCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPalRequiredForStoreOwner' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReviseQuantityAllowed' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RevisePriceAllowed' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreOwnerExtendedListingDurationsEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreOwnerExtendedListingDurations' =>
				array(
					'required' => false,
					'type' => 'StoreOwnerExtendedListingDurationsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnPolicyEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HandlingTimeEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxFlatShippingCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Group1MaxFlatShippingCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Group2MaxFlatShippingCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Group3MaxFlatShippingCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentMethod' =>
				array(
					'required' => false,
					'type' => 'BuyerPaymentMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'VariationsEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AttributeConversionEnabled' =>
				array(
					'required' => false,
					'type' => 'AttributeConversionEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FreeGalleryPlusEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FreePicturePackEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemCompatibilityEnabled' =>
				array(
					'required' => false,
					'type' => 'ItemCompatibilityEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MinItemCompatibility' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxItemCompatibility' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConditionEnabled' =>
				array(
					'required' => false,
					'type' => 'ConditionEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ConditionValues' =>
				array(
					'required' => false,
					'type' => 'ConditionValuesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ValueCategory' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductCreationEnabled' =>
				array(
					'required' => false,
					'type' => 'ProductCreationEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EANEnabled' =>
				array(
					'required' => false,
					'type' => 'ProductIdentiferEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ISBNEnabled' =>
				array(
					'required' => false,
					'type' => 'ProductIdentiferEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UPCEnabled' =>
				array(
					'required' => false,
					'type' => 'ProductIdentiferEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxGranularFitmentCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CompatibleVehicleType' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentOptionsGroup' =>
				array(
					'required' => false,
					'type' => 'PaymentOptionsGroupEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingProfileCategoryGroup' =>
				array(
					'required' => false,
					'type' => 'ProfileCategoryGroupCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentProfileCategoryGroup' =>
				array(
					'required' => false,
					'type' => 'ProfileCategoryGroupCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnPolicyProfileCategoryGroup' =>
				array(
					'required' => false,
					'type' => 'ProfileCategoryGroupCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VINSupported' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VRMSupported' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerProvidedTitleSupported' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DepositSupported' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GlobalShippingEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AdditionalCompatibilityEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PickupDropOffEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DigitalGoodDeliveryEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EpidSupported' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'KTypeSupported' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductRequiredEnabled' =>
				array(
					'required' => false,
					'type' => 'ProductRequiredEnabledCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DomesticReturnsAcceptedValues' =>
				array(
					'required' => false,
					'type' => 'DomesticReturnsAcceptedCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InternationalReturnsAcceptedValues' =>
				array(
					'required' => false,
					'type' => 'InternationalReturnsAcceptedCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DomesticReturnsDurationValues' =>
				array(
					'required' => false,
					'type' => 'DomesticReturnsDurationCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InternationalReturnsDurationValues' =>
				array(
					'required' => false,
					'type' => 'InternationalReturnsDurationCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DomesticReturnsShipmentPayeeValues' =>
				array(
					'required' => false,
					'type' => 'DomesticReturnsShipmentPayeeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InternationalReturnsShipmentPayeeValues' =>
				array(
					'required' => false,
					'type' => 'InternationalReturnsShipmentPayeeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DomesticRefundMethodValues' =>
				array(
					'required' => false,
					'type' => 'DomesticRefundMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InternationalRefundMethodValues' =>
				array(
					'required' => false,
					'type' => 'InternationalRefundMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnPolicyDescriptionEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	function getCategoryID()
	{
		return $this->CategoryID;
	}

	/**
	 * @return void
	 **/
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}

	/**
	 * @return ListingDurationReferenceType
	 * @param integer $index 
	 **/
	function getListingDuration($index = null)
	{
		if ($index !== null)
		{
			return $this->ListingDuration[$index];
		}
		else
		{
			return $this->ListingDuration;
		}
	}

	/**
	 * @return void
	 * @param ListingDurationReferenceType $value
	 * @param integer $index 
	 **/
	function setListingDuration($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ListingDuration[$index] = $value;
		}
		else
		{
			$this->ListingDuration= $value;
		}
	}

	/**
	 * @return void
	 * @param ListingDurationReferenceType $value
	 **/
	function addListingDuration($value)
	{
		$this->ListingDuration[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShippingTermsRequired()
	{
		return $this->ShippingTermsRequired;
	}

	/**
	 * @return void
	 **/
	function setShippingTermsRequired($value)
	{
		$this->ShippingTermsRequired = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBestOfferEnabled()
	{
		return $this->BestOfferEnabled;
	}

	/**
	 * @return void
	 **/
	function setBestOfferEnabled($value)
	{
		$this->BestOfferEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDutchBINEnabled()
	{
		return $this->DutchBINEnabled;
	}

	/**
	 * @return void
	 **/
	function setDutchBINEnabled($value)
	{
		$this->DutchBINEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getUserConsentRequired()
	{
		return $this->UserConsentRequired;
	}

	/**
	 * @return void
	 **/
	function setUserConsentRequired($value)
	{
		$this->UserConsentRequired = $value;
	}

	/**
	 * @return boolean
	 **/
	function getHomePageFeaturedEnabled()
	{
		return $this->HomePageFeaturedEnabled;
	}

	/**
	 * @return void
	 **/
	function setHomePageFeaturedEnabled($value)
	{
		$this->HomePageFeaturedEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getProPackEnabled()
	{
		return $this->ProPackEnabled;
	}

	/**
	 * @return void
	 **/
	function setProPackEnabled($value)
	{
		$this->ProPackEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBasicUpgradePackEnabled()
	{
		return $this->BasicUpgradePackEnabled;
	}

	/**
	 * @return void
	 **/
	function setBasicUpgradePackEnabled($value)
	{
		$this->BasicUpgradePackEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getValuePackEnabled()
	{
		return $this->ValuePackEnabled;
	}

	/**
	 * @return void
	 **/
	function setValuePackEnabled($value)
	{
		$this->ValuePackEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getProPackPlusEnabled()
	{
		return $this->ProPackPlusEnabled;
	}

	/**
	 * @return void
	 **/
	function setProPackPlusEnabled($value)
	{
		$this->ProPackPlusEnabled = $value;
	}

	/**
	 * @return AdFormatEnabledCodeType
	 **/
	function getAdFormatEnabled()
	{
		return $this->AdFormatEnabled;
	}

	/**
	 * @return void
	 **/
	function setAdFormatEnabled($value)
	{
		$this->AdFormatEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBestOfferCounterEnabled()
	{
		return $this->BestOfferCounterEnabled;
	}

	/**
	 * @return void
	 **/
	function setBestOfferCounterEnabled($value)
	{
		$this->BestOfferCounterEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBestOfferAutoDeclineEnabled()
	{
		return $this->BestOfferAutoDeclineEnabled;
	}

	/**
	 * @return void
	 **/
	function setBestOfferAutoDeclineEnabled($value)
	{
		$this->BestOfferAutoDeclineEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalMarketSpecialitySubscription()
	{
		return $this->LocalMarketSpecialitySubscription;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketSpecialitySubscription($value)
	{
		$this->LocalMarketSpecialitySubscription = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalMarketRegularSubscription()
	{
		return $this->LocalMarketRegularSubscription;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketRegularSubscription($value)
	{
		$this->LocalMarketRegularSubscription = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalMarketPremiumSubscription()
	{
		return $this->LocalMarketPremiumSubscription;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketPremiumSubscription($value)
	{
		$this->LocalMarketPremiumSubscription = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalMarketNonSubscription()
	{
		return $this->LocalMarketNonSubscription;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketNonSubscription($value)
	{
		$this->LocalMarketNonSubscription = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExpressEnabled()
	{
		return $this->ExpressEnabled;
	}

	/**
	 * @return void
	 **/
	function setExpressEnabled($value)
	{
		$this->ExpressEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExpressPicturesRequired()
	{
		return $this->ExpressPicturesRequired;
	}

	/**
	 * @return void
	 **/
	function setExpressPicturesRequired($value)
	{
		$this->ExpressPicturesRequired = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExpressConditionRequired()
	{
		return $this->ExpressConditionRequired;
	}

	/**
	 * @return void
	 **/
	function setExpressConditionRequired($value)
	{
		$this->ExpressConditionRequired = $value;
	}

	/**
	 * @return double
	 **/
	function getMinimumReservePrice()
	{
		return $this->MinimumReservePrice;
	}

	/**
	 * @return void
	 **/
	function setMinimumReservePrice($value)
	{
		$this->MinimumReservePrice = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSellerContactDetailsEnabled()
	{
		return $this->SellerContactDetailsEnabled;
	}

	/**
	 * @return void
	 **/
	function setSellerContactDetailsEnabled($value)
	{
		$this->SellerContactDetailsEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getTransactionConfirmationRequestEnabled()
	{
		return $this->TransactionConfirmationRequestEnabled;
	}

	/**
	 * @return void
	 **/
	function setTransactionConfirmationRequestEnabled($value)
	{
		$this->TransactionConfirmationRequestEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getStoreInventoryEnabled()
	{
		return $this->StoreInventoryEnabled;
	}

	/**
	 * @return void
	 **/
	function setStoreInventoryEnabled($value)
	{
		$this->StoreInventoryEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSkypeMeTransactionalEnabled()
	{
		return $this->SkypeMeTransactionalEnabled;
	}

	/**
	 * @return void
	 **/
	function setSkypeMeTransactionalEnabled($value)
	{
		$this->SkypeMeTransactionalEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSkypeMeNonTransactionalEnabled()
	{
		return $this->SkypeMeNonTransactionalEnabled;
	}

	/**
	 * @return void
	 **/
	function setSkypeMeNonTransactionalEnabled($value)
	{
		$this->SkypeMeNonTransactionalEnabled = $value;
	}

	/**
	 * @return ClassifiedAdPaymentMethodEnabledCodeType
	 **/
	function getClassifiedAdPaymentMethodEnabled()
	{
		return $this->ClassifiedAdPaymentMethodEnabled;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdPaymentMethodEnabled($value)
	{
		$this->ClassifiedAdPaymentMethodEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getClassifiedAdShippingMethodEnabled()
	{
		return $this->ClassifiedAdShippingMethodEnabled;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdShippingMethodEnabled($value)
	{
		$this->ClassifiedAdShippingMethodEnabled = $value;
	}

	/**
	 * @return ClassifiedAdBestOfferEnabledCodeType
	 **/
	function getClassifiedAdBestOfferEnabled()
	{
		return $this->ClassifiedAdBestOfferEnabled;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdBestOfferEnabled($value)
	{
		$this->ClassifiedAdBestOfferEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getClassifiedAdCounterOfferEnabled()
	{
		return $this->ClassifiedAdCounterOfferEnabled;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdCounterOfferEnabled($value)
	{
		$this->ClassifiedAdCounterOfferEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getClassifiedAdAutoDeclineEnabled()
	{
		return $this->ClassifiedAdAutoDeclineEnabled;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdAutoDeclineEnabled($value)
	{
		$this->ClassifiedAdAutoDeclineEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getClassifiedAdContactByPhoneEnabled()
	{
		return $this->ClassifiedAdContactByPhoneEnabled;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdContactByPhoneEnabled($value)
	{
		$this->ClassifiedAdContactByPhoneEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getClassifiedAdContactByEmailEnabled()
	{
		return $this->ClassifiedAdContactByEmailEnabled;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdContactByEmailEnabled($value)
	{
		$this->ClassifiedAdContactByEmailEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSafePaymentRequired()
	{
		return $this->SafePaymentRequired;
	}

	/**
	 * @return void
	 **/
	function setSafePaymentRequired($value)
	{
		$this->SafePaymentRequired = $value;
	}

	/**
	 * @return boolean
	 **/
	function getClassifiedAdPayPerLeadEnabled()
	{
		return $this->ClassifiedAdPayPerLeadEnabled;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdPayPerLeadEnabled($value)
	{
		$this->ClassifiedAdPayPerLeadEnabled = $value;
	}

	/**
	 * @return ItemSpecificsEnabledCodeType
	 **/
	function getItemSpecificsEnabled()
	{
		return $this->ItemSpecificsEnabled;
	}

	/**
	 * @return void
	 **/
	function setItemSpecificsEnabled($value)
	{
		$this->ItemSpecificsEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPaisaPayFullEscrowEnabled()
	{
		return $this->PaisaPayFullEscrowEnabled;
	}

	/**
	 * @return void
	 **/
	function setPaisaPayFullEscrowEnabled($value)
	{
		$this->PaisaPayFullEscrowEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBrandMPNIdentifierEnabled()
	{
		return $this->BrandMPNIdentifierEnabled;
	}

	/**
	 * @return void
	 **/
	function setBrandMPNIdentifierEnabled($value)
	{
		$this->BrandMPNIdentifierEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getClassifiedAdAutoAcceptEnabled()
	{
		return $this->ClassifiedAdAutoAcceptEnabled;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdAutoAcceptEnabled($value)
	{
		$this->ClassifiedAdAutoAcceptEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBestOfferAutoAcceptEnabled()
	{
		return $this->BestOfferAutoAcceptEnabled;
	}

	/**
	 * @return void
	 **/
	function setBestOfferAutoAcceptEnabled($value)
	{
		$this->BestOfferAutoAcceptEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getCrossBorderTradeNorthAmericaEnabled()
	{
		return $this->CrossBorderTradeNorthAmericaEnabled;
	}

	/**
	 * @return void
	 **/
	function setCrossBorderTradeNorthAmericaEnabled($value)
	{
		$this->CrossBorderTradeNorthAmericaEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getCrossBorderTradeGBEnabled()
	{
		return $this->CrossBorderTradeGBEnabled;
	}

	/**
	 * @return void
	 **/
	function setCrossBorderTradeGBEnabled($value)
	{
		$this->CrossBorderTradeGBEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getCrossBorderTradeAustraliaEnabled()
	{
		return $this->CrossBorderTradeAustraliaEnabled;
	}

	/**
	 * @return void
	 **/
	function setCrossBorderTradeAustraliaEnabled($value)
	{
		$this->CrossBorderTradeAustraliaEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPayPalBuyerProtectionEnabled()
	{
		return $this->PayPalBuyerProtectionEnabled;
	}

	/**
	 * @return void
	 **/
	function setPayPalBuyerProtectionEnabled($value)
	{
		$this->PayPalBuyerProtectionEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBuyerGuaranteeEnabled()
	{
		return $this->BuyerGuaranteeEnabled;
	}

	/**
	 * @return void
	 **/
	function setBuyerGuaranteeEnabled($value)
	{
		$this->BuyerGuaranteeEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getCombinedFixedPriceTreatmentEnabled()
	{
		return $this->CombinedFixedPriceTreatmentEnabled;
	}

	/**
	 * @return void
	 **/
	function setCombinedFixedPriceTreatmentEnabled($value)
	{
		$this->CombinedFixedPriceTreatmentEnabled = $value;
	}

	/**
	 * @return ListingEnhancementDurationReferenceType
	 **/
	function getGalleryFeaturedDurations()
	{
		return $this->GalleryFeaturedDurations;
	}

	/**
	 * @return void
	 **/
	function setGalleryFeaturedDurations($value)
	{
		$this->GalleryFeaturedDurations = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPayPalRequired()
	{
		return $this->PayPalRequired;
	}

	/**
	 * @return void
	 **/
	function setPayPalRequired($value)
	{
		$this->PayPalRequired = $value;
	}

	/**
	 * @return AdFormatEnabledCodeType
	 **/
	function geteBayMotorsProAdFormatEnabled()
	{
		return $this->eBayMotorsProAdFormatEnabled;
	}

	/**
	 * @return void
	 **/
	function seteBayMotorsProAdFormatEnabled($value)
	{
		$this->eBayMotorsProAdFormatEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayMotorsProContactByPhoneEnabled()
	{
		return $this->eBayMotorsProContactByPhoneEnabled;
	}

	/**
	 * @return void
	 **/
	function seteBayMotorsProContactByPhoneEnabled($value)
	{
		$this->eBayMotorsProContactByPhoneEnabled = $value;
	}

	/**
	 * @return int
	 **/
	function geteBayMotorsProPhoneCount()
	{
		return $this->eBayMotorsProPhoneCount;
	}

	/**
	 * @return void
	 **/
	function seteBayMotorsProPhoneCount($value)
	{
		$this->eBayMotorsProPhoneCount = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayMotorsProContactByAddressEnabled()
	{
		return $this->eBayMotorsProContactByAddressEnabled;
	}

	/**
	 * @return void
	 **/
	function seteBayMotorsProContactByAddressEnabled($value)
	{
		$this->eBayMotorsProContactByAddressEnabled = $value;
	}

	/**
	 * @return int
	 **/
	function geteBayMotorsProStreetCount()
	{
		return $this->eBayMotorsProStreetCount;
	}

	/**
	 * @return void
	 **/
	function seteBayMotorsProStreetCount($value)
	{
		$this->eBayMotorsProStreetCount = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayMotorsProCompanyNameEnabled()
	{
		return $this->eBayMotorsProCompanyNameEnabled;
	}

	/**
	 * @return void
	 **/
	function seteBayMotorsProCompanyNameEnabled($value)
	{
		$this->eBayMotorsProCompanyNameEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayMotorsProContactByEmailEnabled()
	{
		return $this->eBayMotorsProContactByEmailEnabled;
	}

	/**
	 * @return void
	 **/
	function seteBayMotorsProContactByEmailEnabled($value)
	{
		$this->eBayMotorsProContactByEmailEnabled = $value;
	}

	/**
	 * @return ClassifiedAdBestOfferEnabledCodeType
	 **/
	function geteBayMotorsProBestOfferEnabled()
	{
		return $this->eBayMotorsProBestOfferEnabled;
	}

	/**
	 * @return void
	 **/
	function seteBayMotorsProBestOfferEnabled($value)
	{
		$this->eBayMotorsProBestOfferEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayMotorsProAutoAcceptEnabled()
	{
		return $this->eBayMotorsProAutoAcceptEnabled;
	}

	/**
	 * @return void
	 **/
	function seteBayMotorsProAutoAcceptEnabled($value)
	{
		$this->eBayMotorsProAutoAcceptEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayMotorsProAutoDeclineEnabled()
	{
		return $this->eBayMotorsProAutoDeclineEnabled;
	}

	/**
	 * @return void
	 **/
	function seteBayMotorsProAutoDeclineEnabled($value)
	{
		$this->eBayMotorsProAutoDeclineEnabled = $value;
	}

	/**
	 * @return ClassifiedAdPaymentMethodEnabledCodeType
	 **/
	function geteBayMotorsProPaymentMethodCheckOutEnabled()
	{
		return $this->eBayMotorsProPaymentMethodCheckOutEnabled;
	}

	/**
	 * @return void
	 **/
	function seteBayMotorsProPaymentMethodCheckOutEnabled($value)
	{
		$this->eBayMotorsProPaymentMethodCheckOutEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayMotorsProShippingMethodEnabled()
	{
		return $this->eBayMotorsProShippingMethodEnabled;
	}

	/**
	 * @return void
	 **/
	function seteBayMotorsProShippingMethodEnabled($value)
	{
		$this->eBayMotorsProShippingMethodEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayMotorsProCounterOfferEnabled()
	{
		return $this->eBayMotorsProCounterOfferEnabled;
	}

	/**
	 * @return void
	 **/
	function seteBayMotorsProCounterOfferEnabled($value)
	{
		$this->eBayMotorsProCounterOfferEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function geteBayMotorsProSellerContactDetailsEnabled()
	{
		return $this->eBayMotorsProSellerContactDetailsEnabled;
	}

	/**
	 * @return void
	 **/
	function seteBayMotorsProSellerContactDetailsEnabled($value)
	{
		$this->eBayMotorsProSellerContactDetailsEnabled = $value;
	}

	/**
	 * @return AdFormatEnabledCodeType
	 **/
	function getLocalMarketAdFormatEnabled()
	{
		return $this->LocalMarketAdFormatEnabled;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketAdFormatEnabled($value)
	{
		$this->LocalMarketAdFormatEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalMarketContactByPhoneEnabled()
	{
		return $this->LocalMarketContactByPhoneEnabled;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketContactByPhoneEnabled($value)
	{
		$this->LocalMarketContactByPhoneEnabled = $value;
	}

	/**
	 * @return int
	 **/
	function getLocalMarketPhoneCount()
	{
		return $this->LocalMarketPhoneCount;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketPhoneCount($value)
	{
		$this->LocalMarketPhoneCount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalMarketContactByAddressEnabled()
	{
		return $this->LocalMarketContactByAddressEnabled;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketContactByAddressEnabled($value)
	{
		$this->LocalMarketContactByAddressEnabled = $value;
	}

	/**
	 * @return int
	 **/
	function getLocalMarketStreetCount()
	{
		return $this->LocalMarketStreetCount;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketStreetCount($value)
	{
		$this->LocalMarketStreetCount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalMarketCompanyNameEnabled()
	{
		return $this->LocalMarketCompanyNameEnabled;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketCompanyNameEnabled($value)
	{
		$this->LocalMarketCompanyNameEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalMarketContactByEmailEnabled()
	{
		return $this->LocalMarketContactByEmailEnabled;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketContactByEmailEnabled($value)
	{
		$this->LocalMarketContactByEmailEnabled = $value;
	}

	/**
	 * @return ClassifiedAdBestOfferEnabledCodeType
	 **/
	function getLocalMarketBestOfferEnabled()
	{
		return $this->LocalMarketBestOfferEnabled;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketBestOfferEnabled($value)
	{
		$this->LocalMarketBestOfferEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalMarketAutoAcceptEnabled()
	{
		return $this->LocalMarketAutoAcceptEnabled;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketAutoAcceptEnabled($value)
	{
		$this->LocalMarketAutoAcceptEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalMarketAutoDeclineEnabled()
	{
		return $this->LocalMarketAutoDeclineEnabled;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketAutoDeclineEnabled($value)
	{
		$this->LocalMarketAutoDeclineEnabled = $value;
	}

	/**
	 * @return ClassifiedAdPaymentMethodEnabledCodeType
	 **/
	function getLocalMarketPaymentMethodCheckOutEnabled()
	{
		return $this->LocalMarketPaymentMethodCheckOutEnabled;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketPaymentMethodCheckOutEnabled($value)
	{
		$this->LocalMarketPaymentMethodCheckOutEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalMarketShippingMethodEnabled()
	{
		return $this->LocalMarketShippingMethodEnabled;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketShippingMethodEnabled($value)
	{
		$this->LocalMarketShippingMethodEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalMarketCounterOfferEnabled()
	{
		return $this->LocalMarketCounterOfferEnabled;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketCounterOfferEnabled($value)
	{
		$this->LocalMarketCounterOfferEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLocalMarketSellerContactDetailsEnabled()
	{
		return $this->LocalMarketSellerContactDetailsEnabled;
	}

	/**
	 * @return void
	 **/
	function setLocalMarketSellerContactDetailsEnabled($value)
	{
		$this->LocalMarketSellerContactDetailsEnabled = $value;
	}

	/**
	 * @return int
	 **/
	function getClassifiedAdPhoneCount()
	{
		return $this->ClassifiedAdPhoneCount;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdPhoneCount($value)
	{
		$this->ClassifiedAdPhoneCount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getClassifiedAdContactByAddressEnabled()
	{
		return $this->ClassifiedAdContactByAddressEnabled;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdContactByAddressEnabled($value)
	{
		$this->ClassifiedAdContactByAddressEnabled = $value;
	}

	/**
	 * @return int
	 **/
	function getClassifiedAdStreetCount()
	{
		return $this->ClassifiedAdStreetCount;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdStreetCount($value)
	{
		$this->ClassifiedAdStreetCount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getClassifiedAdCompanyNameEnabled()
	{
		return $this->ClassifiedAdCompanyNameEnabled;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdCompanyNameEnabled($value)
	{
		$this->ClassifiedAdCompanyNameEnabled = $value;
	}

	/**
	 * @return GeographicExposureCodeType
	 **/
	function getSpecialitySubscription()
	{
		return $this->SpecialitySubscription;
	}

	/**
	 * @return void
	 **/
	function setSpecialitySubscription($value)
	{
		$this->SpecialitySubscription = $value;
	}

	/**
	 * @return GeographicExposureCodeType
	 **/
	function getRegularSubscription()
	{
		return $this->RegularSubscription;
	}

	/**
	 * @return void
	 **/
	function setRegularSubscription($value)
	{
		$this->RegularSubscription = $value;
	}

	/**
	 * @return GeographicExposureCodeType
	 **/
	function getPremiumSubscription()
	{
		return $this->PremiumSubscription;
	}

	/**
	 * @return void
	 **/
	function setPremiumSubscription($value)
	{
		$this->PremiumSubscription = $value;
	}

	/**
	 * @return GeographicExposureCodeType
	 **/
	function getNonSubscription()
	{
		return $this->NonSubscription;
	}

	/**
	 * @return void
	 **/
	function setNonSubscription($value)
	{
		$this->NonSubscription = $value;
	}

	/**
	 * @return INEscrowWorkflowTimelineCodeType
	 **/
	function getINEscrowWorkflowTimeline()
	{
		return $this->INEscrowWorkflowTimeline;
	}

	/**
	 * @return void
	 **/
	function setINEscrowWorkflowTimeline($value)
	{
		$this->INEscrowWorkflowTimeline = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPayPalRequiredForStoreOwner()
	{
		return $this->PayPalRequiredForStoreOwner;
	}

	/**
	 * @return void
	 **/
	function setPayPalRequiredForStoreOwner($value)
	{
		$this->PayPalRequiredForStoreOwner = $value;
	}

	/**
	 * @return boolean
	 **/
	function getReviseQuantityAllowed()
	{
		return $this->ReviseQuantityAllowed;
	}

	/**
	 * @return void
	 **/
	function setReviseQuantityAllowed($value)
	{
		$this->ReviseQuantityAllowed = $value;
	}

	/**
	 * @return boolean
	 **/
	function getRevisePriceAllowed()
	{
		return $this->RevisePriceAllowed;
	}

	/**
	 * @return void
	 **/
	function setRevisePriceAllowed($value)
	{
		$this->RevisePriceAllowed = $value;
	}

	/**
	 * @return boolean
	 **/
	function getStoreOwnerExtendedListingDurationsEnabled()
	{
		return $this->StoreOwnerExtendedListingDurationsEnabled;
	}

	/**
	 * @return void
	 **/
	function setStoreOwnerExtendedListingDurationsEnabled($value)
	{
		$this->StoreOwnerExtendedListingDurationsEnabled = $value;
	}

	/**
	 * @return StoreOwnerExtendedListingDurationsType
	 **/
	function getStoreOwnerExtendedListingDurations()
	{
		return $this->StoreOwnerExtendedListingDurations;
	}

	/**
	 * @return void
	 **/
	function setStoreOwnerExtendedListingDurations($value)
	{
		$this->StoreOwnerExtendedListingDurations = $value;
	}

	/**
	 * @return boolean
	 **/
	function getReturnPolicyEnabled()
	{
		return $this->ReturnPolicyEnabled;
	}

	/**
	 * @return void
	 **/
	function setReturnPolicyEnabled($value)
	{
		$this->ReturnPolicyEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getHandlingTimeEnabled()
	{
		return $this->HandlingTimeEnabled;
	}

	/**
	 * @return void
	 **/
	function setHandlingTimeEnabled($value)
	{
		$this->HandlingTimeEnabled = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getMaxFlatShippingCost()
	{
		return $this->MaxFlatShippingCost;
	}

	/**
	 * @return void
	 **/
	function setMaxFlatShippingCost($value)
	{
		$this->MaxFlatShippingCost = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getGroup1MaxFlatShippingCost()
	{
		return $this->Group1MaxFlatShippingCost;
	}

	/**
	 * @return void
	 **/
	function setGroup1MaxFlatShippingCost($value)
	{
		$this->Group1MaxFlatShippingCost = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getGroup2MaxFlatShippingCost()
	{
		return $this->Group2MaxFlatShippingCost;
	}

	/**
	 * @return void
	 **/
	function setGroup2MaxFlatShippingCost($value)
	{
		$this->Group2MaxFlatShippingCost = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getGroup3MaxFlatShippingCost()
	{
		return $this->Group3MaxFlatShippingCost;
	}

	/**
	 * @return void
	 **/
	function setGroup3MaxFlatShippingCost($value)
	{
		$this->Group3MaxFlatShippingCost = $value;
	}

	/**
	 * @return BuyerPaymentMethodCodeType
	 * @param integer $index 
	 **/
	function getPaymentMethod($index = null)
	{
		if ($index !== null)
		{
			return $this->PaymentMethod[$index];
		}
		else
		{
			return $this->PaymentMethod;
		}
	}

	/**
	 * @return void
	 * @param BuyerPaymentMethodCodeType $value
	 * @param integer $index 
	 **/
	function setPaymentMethod($value, $index = null)
	{
		if ($index !== null)
		{
			$this->PaymentMethod[$index] = $value;
		}
		else
		{
			$this->PaymentMethod= $value;
		}
	}

	/**
	 * @return void
	 * @param BuyerPaymentMethodCodeType $value
	 **/
	function addPaymentMethod($value)
	{
		$this->PaymentMethod[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getVariationsEnabled()
	{
		return $this->VariationsEnabled;
	}

	/**
	 * @return void
	 **/
	function setVariationsEnabled($value)
	{
		$this->VariationsEnabled = $value;
	}

	/**
	 * @return AttributeConversionEnabledCodeType
	 **/
	function getAttributeConversionEnabled()
	{
		return $this->AttributeConversionEnabled;
	}

	/**
	 * @return void
	 **/
	function setAttributeConversionEnabled($value)
	{
		$this->AttributeConversionEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getFreeGalleryPlusEnabled()
	{
		return $this->FreeGalleryPlusEnabled;
	}

	/**
	 * @return void
	 **/
	function setFreeGalleryPlusEnabled($value)
	{
		$this->FreeGalleryPlusEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getFreePicturePackEnabled()
	{
		return $this->FreePicturePackEnabled;
	}

	/**
	 * @return void
	 **/
	function setFreePicturePackEnabled($value)
	{
		$this->FreePicturePackEnabled = $value;
	}

	/**
	 * @return ItemCompatibilityEnabledCodeType
	 **/
	function getItemCompatibilityEnabled()
	{
		return $this->ItemCompatibilityEnabled;
	}

	/**
	 * @return void
	 **/
	function setItemCompatibilityEnabled($value)
	{
		$this->ItemCompatibilityEnabled = $value;
	}

	/**
	 * @return int
	 **/
	function getMinItemCompatibility()
	{
		return $this->MinItemCompatibility;
	}

	/**
	 * @return void
	 **/
	function setMinItemCompatibility($value)
	{
		$this->MinItemCompatibility = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxItemCompatibility()
	{
		return $this->MaxItemCompatibility;
	}

	/**
	 * @return void
	 **/
	function setMaxItemCompatibility($value)
	{
		$this->MaxItemCompatibility = $value;
	}

	/**
	 * @return ConditionEnabledCodeType
	 **/
	function getConditionEnabled()
	{
		return $this->ConditionEnabled;
	}

	/**
	 * @return void
	 **/
	function setConditionEnabled($value)
	{
		$this->ConditionEnabled = $value;
	}

	/**
	 * @return ConditionValuesType
	 **/
	function getConditionValues()
	{
		return $this->ConditionValues;
	}

	/**
	 * @return void
	 **/
	function setConditionValues($value)
	{
		$this->ConditionValues = $value;
	}

	/**
	 * @return boolean
	 **/
	function getValueCategory()
	{
		return $this->ValueCategory;
	}

	/**
	 * @return void
	 **/
	function setValueCategory($value)
	{
		$this->ValueCategory = $value;
	}

	/**
	 * @return ProductCreationEnabledCodeType
	 **/
	function getProductCreationEnabled()
	{
		return $this->ProductCreationEnabled;
	}

	/**
	 * @return void
	 **/
	function setProductCreationEnabled($value)
	{
		$this->ProductCreationEnabled = $value;
	}

	/**
	 * @return ProductIdentiferEnabledCodeType
	 **/
	function getEANEnabled()
	{
		return $this->EANEnabled;
	}

	/**
	 * @return void
	 **/
	function setEANEnabled($value)
	{
		$this->EANEnabled = $value;
	}

	/**
	 * @return ProductIdentiferEnabledCodeType
	 **/
	function getISBNEnabled()
	{
		return $this->ISBNEnabled;
	}

	/**
	 * @return void
	 **/
	function setISBNEnabled($value)
	{
		$this->ISBNEnabled = $value;
	}

	/**
	 * @return ProductIdentiferEnabledCodeType
	 **/
	function getUPCEnabled()
	{
		return $this->UPCEnabled;
	}

	/**
	 * @return void
	 **/
	function setUPCEnabled($value)
	{
		$this->UPCEnabled = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxGranularFitmentCount()
	{
		return $this->MaxGranularFitmentCount;
	}

	/**
	 * @return void
	 **/
	function setMaxGranularFitmentCount($value)
	{
		$this->MaxGranularFitmentCount = $value;
	}

	/**
	 * @return string
	 **/
	function getCompatibleVehicleType()
	{
		return $this->CompatibleVehicleType;
	}

	/**
	 * @return void
	 **/
	function setCompatibleVehicleType($value)
	{
		$this->CompatibleVehicleType = $value;
	}

	/**
	 * @return PaymentOptionsGroupEnabledCodeType
	 **/
	function getPaymentOptionsGroup()
	{
		return $this->PaymentOptionsGroup;
	}

	/**
	 * @return void
	 **/
	function setPaymentOptionsGroup($value)
	{
		$this->PaymentOptionsGroup = $value;
	}

	/**
	 * @return ProfileCategoryGroupCodeType
	 **/
	function getShippingProfileCategoryGroup()
	{
		return $this->ShippingProfileCategoryGroup;
	}

	/**
	 * @return void
	 **/
	function setShippingProfileCategoryGroup($value)
	{
		$this->ShippingProfileCategoryGroup = $value;
	}

	/**
	 * @return ProfileCategoryGroupCodeType
	 **/
	function getPaymentProfileCategoryGroup()
	{
		return $this->PaymentProfileCategoryGroup;
	}

	/**
	 * @return void
	 **/
	function setPaymentProfileCategoryGroup($value)
	{
		$this->PaymentProfileCategoryGroup = $value;
	}

	/**
	 * @return ProfileCategoryGroupCodeType
	 **/
	function getReturnPolicyProfileCategoryGroup()
	{
		return $this->ReturnPolicyProfileCategoryGroup;
	}

	/**
	 * @return void
	 **/
	function setReturnPolicyProfileCategoryGroup($value)
	{
		$this->ReturnPolicyProfileCategoryGroup = $value;
	}

	/**
	 * @return boolean
	 **/
	function getVINSupported()
	{
		return $this->VINSupported;
	}

	/**
	 * @return void
	 **/
	function setVINSupported($value)
	{
		$this->VINSupported = $value;
	}

	/**
	 * @return boolean
	 **/
	function getVRMSupported()
	{
		return $this->VRMSupported;
	}

	/**
	 * @return void
	 **/
	function setVRMSupported($value)
	{
		$this->VRMSupported = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSellerProvidedTitleSupported()
	{
		return $this->SellerProvidedTitleSupported;
	}

	/**
	 * @return void
	 **/
	function setSellerProvidedTitleSupported($value)
	{
		$this->SellerProvidedTitleSupported = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDepositSupported()
	{
		return $this->DepositSupported;
	}

	/**
	 * @return void
	 **/
	function setDepositSupported($value)
	{
		$this->DepositSupported = $value;
	}

	/**
	 * @return boolean
	 **/
	function getGlobalShippingEnabled()
	{
		return $this->GlobalShippingEnabled;
	}

	/**
	 * @return void
	 **/
	function setGlobalShippingEnabled($value)
	{
		$this->GlobalShippingEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAdditionalCompatibilityEnabled()
	{
		return $this->AdditionalCompatibilityEnabled;
	}

	/**
	 * @return void
	 **/
	function setAdditionalCompatibilityEnabled($value)
	{
		$this->AdditionalCompatibilityEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPickupDropOffEnabled()
	{
		return $this->PickupDropOffEnabled;
	}

	/**
	 * @return void
	 **/
	function setPickupDropOffEnabled($value)
	{
		$this->PickupDropOffEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDigitalGoodDeliveryEnabled()
	{
		return $this->DigitalGoodDeliveryEnabled;
	}

	/**
	 * @return void
	 **/
	function setDigitalGoodDeliveryEnabled($value)
	{
		$this->DigitalGoodDeliveryEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getEpidSupported()
	{
		return $this->EpidSupported;
	}

	/**
	 * @return void
	 **/
	function setEpidSupported($value)
	{
		$this->EpidSupported = $value;
	}

	/**
	 * @return boolean
	 **/
	function getKTypeSupported()
	{
		return $this->KTypeSupported;
	}

	/**
	 * @return void
	 **/
	function setKTypeSupported($value)
	{
		$this->KTypeSupported = $value;
	}

	/**
	 * @return ProductRequiredEnabledCodeType
	 **/
	function getProductRequiredEnabled()
	{
		return $this->ProductRequiredEnabled;
	}

	/**
	 * @return void
	 **/
	function setProductRequiredEnabled($value)
	{
		$this->ProductRequiredEnabled = $value;
	}

	/**
	 * @return DomesticReturnsAcceptedCodeType
	 **/
	function getDomesticReturnsAcceptedValues()
	{
		return $this->DomesticReturnsAcceptedValues;
	}

	/**
	 * @return void
	 **/
	function setDomesticReturnsAcceptedValues($value)
	{
		$this->DomesticReturnsAcceptedValues = $value;
	}

	/**
	 * @return InternationalReturnsAcceptedCodeType
	 **/
	function getInternationalReturnsAcceptedValues()
	{
		return $this->InternationalReturnsAcceptedValues;
	}

	/**
	 * @return void
	 **/
	function setInternationalReturnsAcceptedValues($value)
	{
		$this->InternationalReturnsAcceptedValues = $value;
	}

	/**
	 * @return DomesticReturnsDurationCodeType
	 **/
	function getDomesticReturnsDurationValues()
	{
		return $this->DomesticReturnsDurationValues;
	}

	/**
	 * @return void
	 **/
	function setDomesticReturnsDurationValues($value)
	{
		$this->DomesticReturnsDurationValues = $value;
	}

	/**
	 * @return InternationalReturnsDurationCodeType
	 **/
	function getInternationalReturnsDurationValues()
	{
		return $this->InternationalReturnsDurationValues;
	}

	/**
	 * @return void
	 **/
	function setInternationalReturnsDurationValues($value)
	{
		$this->InternationalReturnsDurationValues = $value;
	}

	/**
	 * @return DomesticReturnsShipmentPayeeCodeType
	 **/
	function getDomesticReturnsShipmentPayeeValues()
	{
		return $this->DomesticReturnsShipmentPayeeValues;
	}

	/**
	 * @return void
	 **/
	function setDomesticReturnsShipmentPayeeValues($value)
	{
		$this->DomesticReturnsShipmentPayeeValues = $value;
	}

	/**
	 * @return InternationalReturnsShipmentPayeeCodeType
	 **/
	function getInternationalReturnsShipmentPayeeValues()
	{
		return $this->InternationalReturnsShipmentPayeeValues;
	}

	/**
	 * @return void
	 **/
	function setInternationalReturnsShipmentPayeeValues($value)
	{
		$this->InternationalReturnsShipmentPayeeValues = $value;
	}

	/**
	 * @return DomesticRefundMethodCodeType
	 **/
	function getDomesticRefundMethodValues()
	{
		return $this->DomesticRefundMethodValues;
	}

	/**
	 * @return void
	 **/
	function setDomesticRefundMethodValues($value)
	{
		$this->DomesticRefundMethodValues = $value;
	}

	/**
	 * @return InternationalRefundMethodCodeType
	 **/
	function getInternationalRefundMethodValues()
	{
		return $this->InternationalRefundMethodValues;
	}

	/**
	 * @return void
	 **/
	function setInternationalRefundMethodValues($value)
	{
		$this->InternationalRefundMethodValues = $value;
	}

	/**
	 * @return boolean
	 **/
	function getReturnPolicyDescriptionEnabled()
	{
		return $this->ReturnPolicyDescriptionEnabled;
	}

	/**
	 * @return void
	 **/
	function setReturnPolicyDescriptionEnabled($value)
	{
		$this->ReturnPolicyDescriptionEnabled = $value;
	}

}
?>
