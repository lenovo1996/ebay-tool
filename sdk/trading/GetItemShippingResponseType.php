<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'ShippingDetailsType.php';
require_once 'PickupInStoreDetailsType.php';

/**
  * This is the base response type of the <b>GetItemShipping</b> call. This call takes an <b>ItemID</b> value for an item that has yet to be shipped, and then returns estimated shipping costs for every shipping service that the seller has offered with the listing. This call will also return the  <b>PickUpInStoreDetails.EligibleForPickupInStore</b> flag if the item is available for buyer pick-up through the In-Store Pickup feature.
  * 
 **/

class GetItemShippingResponseType extends AbstractResponseType
{
	/**
	* @var ShippingDetailsType
	**/
	public $ShippingDetails;

	/**
	* @var PickupInStoreDetailsType
	**/
	public $PickUpInStoreDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetItemShippingResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ShippingDetails' =>
				array(
					'required' => false,
					'type' => 'ShippingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PickUpInStoreDetails' =>
				array(
					'required' => false,
					'type' => 'PickupInStoreDetailsType',
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
	 * @return PickupInStoreDetailsType
	 **/
	function getPickUpInStoreDetails()
	{
		return $this->PickUpInStoreDetails;
	}

	/**
	 * @return void
	 **/
	function setPickUpInStoreDetails($value)
	{
		$this->PickUpInStoreDetails = $value;
	}

}
?>
