<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Retrieves the specified user preferences for the authenticated caller.
  * 
 **/

class GetUserPreferencesRequestType extends AbstractRequestType
{
	/**
	* @var boolean
	**/
	public $ShowBidderNoticePreferences;

	/**
	* @var boolean
	**/
	public $ShowCombinedPaymentPreferences;

	/**
	* @var boolean
	**/
	public $ShowCrossPromotionPreferences;

	/**
	* @var boolean
	**/
	public $ShowSellerPaymentPreferences;

	/**
	* @var boolean
	**/
	public $ShowEndOfAuctionEmailPreferences;

	/**
	* @var boolean
	**/
	public $ShowSellerFavoriteItemPreferences;

	/**
	* @var boolean
	**/
	public $ShowProStoresPreferences;

	/**
	* @var boolean
	**/
	public $ShowEmailShipmentTrackingNumberPreference;

	/**
	* @var boolean
	**/
	public $ShowRequiredShipPhoneNumberPreference;

	/**
	* @var boolean
	**/
	public $ShowSellerExcludeShipToLocationPreference;

	/**
	* @var boolean
	**/
	public $ShowUnpaidItemAssistancePreference;

	/**
	* @var boolean
	**/
	public $ShowPurchaseReminderEmailPreferences;

	/**
	* @var boolean
	**/
	public $ShowUnpaidItemAssistanceExclusionList;

	/**
	* @var boolean
	**/
	public $ShowSellerProfilePreferences;

	/**
	* @var boolean
	**/
	public $ShowSellerReturnPreferences;

	/**
	* @var boolean
	**/
	public $ShowGlobalShippingProgramPreference;

	/**
	* @var boolean
	**/
	public $ShowDispatchCutoffTimePreferences;

	/**
	* @var boolean
	**/
	public $ShowGlobalShippingProgramListingPreference;

	/**
	* @var boolean
	**/
	public $ShowOverrideGSPServiceWithIntlServicePreference;

	/**
	* @var boolean
	**/
	public $ShowPickupDropoffPreferences;

	/**
	* @var boolean
	**/
	public $ShowOutOfStockControlPreference;

	/**
	* @var boolean
	**/
	public $ShoweBayPLUSPreference;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetUserPreferencesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ShowBidderNoticePreferences' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowCombinedPaymentPreferences' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowCrossPromotionPreferences' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowSellerPaymentPreferences' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowEndOfAuctionEmailPreferences' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowSellerFavoriteItemPreferences' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowProStoresPreferences' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowEmailShipmentTrackingNumberPreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowRequiredShipPhoneNumberPreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowSellerExcludeShipToLocationPreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowUnpaidItemAssistancePreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowPurchaseReminderEmailPreferences' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowUnpaidItemAssistanceExclusionList' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowSellerProfilePreferences' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowSellerReturnPreferences' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowGlobalShippingProgramPreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowDispatchCutoffTimePreferences' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowGlobalShippingProgramListingPreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowOverrideGSPServiceWithIntlServicePreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowPickupDropoffPreferences' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShowOutOfStockControlPreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShoweBayPLUSPreference' =>
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
	 * @return boolean
	 **/
	function getShowBidderNoticePreferences()
	{
		return $this->ShowBidderNoticePreferences;
	}

	/**
	 * @return void
	 **/
	function setShowBidderNoticePreferences($value)
	{
		$this->ShowBidderNoticePreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowCombinedPaymentPreferences()
	{
		return $this->ShowCombinedPaymentPreferences;
	}

	/**
	 * @return void
	 **/
	function setShowCombinedPaymentPreferences($value)
	{
		$this->ShowCombinedPaymentPreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowCrossPromotionPreferences()
	{
		return $this->ShowCrossPromotionPreferences;
	}

	/**
	 * @return void
	 **/
	function setShowCrossPromotionPreferences($value)
	{
		$this->ShowCrossPromotionPreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowSellerPaymentPreferences()
	{
		return $this->ShowSellerPaymentPreferences;
	}

	/**
	 * @return void
	 **/
	function setShowSellerPaymentPreferences($value)
	{
		$this->ShowSellerPaymentPreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowEndOfAuctionEmailPreferences()
	{
		return $this->ShowEndOfAuctionEmailPreferences;
	}

	/**
	 * @return void
	 **/
	function setShowEndOfAuctionEmailPreferences($value)
	{
		$this->ShowEndOfAuctionEmailPreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowSellerFavoriteItemPreferences()
	{
		return $this->ShowSellerFavoriteItemPreferences;
	}

	/**
	 * @return void
	 **/
	function setShowSellerFavoriteItemPreferences($value)
	{
		$this->ShowSellerFavoriteItemPreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowProStoresPreferences()
	{
		return $this->ShowProStoresPreferences;
	}

	/**
	 * @return void
	 **/
	function setShowProStoresPreferences($value)
	{
		$this->ShowProStoresPreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowEmailShipmentTrackingNumberPreference()
	{
		return $this->ShowEmailShipmentTrackingNumberPreference;
	}

	/**
	 * @return void
	 **/
	function setShowEmailShipmentTrackingNumberPreference($value)
	{
		$this->ShowEmailShipmentTrackingNumberPreference = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowRequiredShipPhoneNumberPreference()
	{
		return $this->ShowRequiredShipPhoneNumberPreference;
	}

	/**
	 * @return void
	 **/
	function setShowRequiredShipPhoneNumberPreference($value)
	{
		$this->ShowRequiredShipPhoneNumberPreference = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowSellerExcludeShipToLocationPreference()
	{
		return $this->ShowSellerExcludeShipToLocationPreference;
	}

	/**
	 * @return void
	 **/
	function setShowSellerExcludeShipToLocationPreference($value)
	{
		$this->ShowSellerExcludeShipToLocationPreference = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowUnpaidItemAssistancePreference()
	{
		return $this->ShowUnpaidItemAssistancePreference;
	}

	/**
	 * @return void
	 **/
	function setShowUnpaidItemAssistancePreference($value)
	{
		$this->ShowUnpaidItemAssistancePreference = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowPurchaseReminderEmailPreferences()
	{
		return $this->ShowPurchaseReminderEmailPreferences;
	}

	/**
	 * @return void
	 **/
	function setShowPurchaseReminderEmailPreferences($value)
	{
		$this->ShowPurchaseReminderEmailPreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowUnpaidItemAssistanceExclusionList()
	{
		return $this->ShowUnpaidItemAssistanceExclusionList;
	}

	/**
	 * @return void
	 **/
	function setShowUnpaidItemAssistanceExclusionList($value)
	{
		$this->ShowUnpaidItemAssistanceExclusionList = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowSellerProfilePreferences()
	{
		return $this->ShowSellerProfilePreferences;
	}

	/**
	 * @return void
	 **/
	function setShowSellerProfilePreferences($value)
	{
		$this->ShowSellerProfilePreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowSellerReturnPreferences()
	{
		return $this->ShowSellerReturnPreferences;
	}

	/**
	 * @return void
	 **/
	function setShowSellerReturnPreferences($value)
	{
		$this->ShowSellerReturnPreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowGlobalShippingProgramPreference()
	{
		return $this->ShowGlobalShippingProgramPreference;
	}

	/**
	 * @return void
	 **/
	function setShowGlobalShippingProgramPreference($value)
	{
		$this->ShowGlobalShippingProgramPreference = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowDispatchCutoffTimePreferences()
	{
		return $this->ShowDispatchCutoffTimePreferences;
	}

	/**
	 * @return void
	 **/
	function setShowDispatchCutoffTimePreferences($value)
	{
		$this->ShowDispatchCutoffTimePreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowGlobalShippingProgramListingPreference()
	{
		return $this->ShowGlobalShippingProgramListingPreference;
	}

	/**
	 * @return void
	 **/
	function setShowGlobalShippingProgramListingPreference($value)
	{
		$this->ShowGlobalShippingProgramListingPreference = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowOverrideGSPServiceWithIntlServicePreference()
	{
		return $this->ShowOverrideGSPServiceWithIntlServicePreference;
	}

	/**
	 * @return void
	 **/
	function setShowOverrideGSPServiceWithIntlServicePreference($value)
	{
		$this->ShowOverrideGSPServiceWithIntlServicePreference = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowPickupDropoffPreferences()
	{
		return $this->ShowPickupDropoffPreferences;
	}

	/**
	 * @return void
	 **/
	function setShowPickupDropoffPreferences($value)
	{
		$this->ShowPickupDropoffPreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShowOutOfStockControlPreference()
	{
		return $this->ShowOutOfStockControlPreference;
	}

	/**
	 * @return void
	 **/
	function setShowOutOfStockControlPreference($value)
	{
		$this->ShowOutOfStockControlPreference = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShoweBayPLUSPreference()
	{
		return $this->ShoweBayPLUSPreference;
	}

	/**
	 * @return void
	 **/
	function setShoweBayPLUSPreference($value)
	{
		$this->ShoweBayPLUSPreference = $value;
	}

}
?>
