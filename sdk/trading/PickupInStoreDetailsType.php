<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Complex type defining the <b>PickupInStoreDetails</b> container, that is used in Add/Revise/Relist calls to enable the listing for In-Store Pickup or Click and Collect.
  * <br/><br/>
  * <span class="tablenote">
  * <strong>Note:</strong> At this time, In-Store Pickup as a fulfillment method is only available to a limited number of large retail merchants in the US, Canada, UK, Germany, and Australia marketplaces, and can only be applied to multiple-quantity, fixed-price listings. The Click and Collect feature is only available to large merchants on the UK, Australia, and Germany marketplaces.
  * </span>
  * 
 **/

class PickupInStoreDetailsType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $EligibleForPickupInStore;

	/**
	* @var boolean
	**/
	protected $EligibleForPickupDropOff;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PickupInStoreDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'EligibleForPickupInStore' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EligibleForPickupDropOff' =>
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
	function getEligibleForPickupInStore()
	{
		return $this->EligibleForPickupInStore;
	}

	/**
	 * @return void
	 **/
	function setEligibleForPickupInStore($value)
	{
		$this->EligibleForPickupInStore = $value;
	}

	/**
	 * @return boolean
	 **/
	function getEligibleForPickupDropOff()
	{
		return $this->EligibleForPickupDropOff;
	}

	/**
	 * @return void
	 **/
	function setEligibleForPickupDropOff($value)
	{
		$this->EligibleForPickupDropOff = $value;
	}

}
?>
