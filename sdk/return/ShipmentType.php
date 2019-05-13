<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'ShipmentStatusType.php';
require_once 'Amount.php';
require_once 'Address.php';

/**
  * Type defining the <b>buyerReturnShipment</b> container, which consists of
  * details related to the buyer's return shipment to the seller. Information in the
  * <b>buyerReturnShipment</b> container include the seller's primary return address on
  * record, the expected delivery date, the shipping carrier and tracking number, the
  * delivery status, and the shipping costs.
  * 
 **/

class ShipmentType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var ShipmentStatusType
	**/
	public $shipmentStatus;

	/**
	* @var string
	**/
	public $trackingNumber;

	/**
	* @var string
	**/
	public $carrierUsed;

	/**
	* @var dateTime
	**/
	public $deliveryDate;

	/**
	* @var Amount
	**/
	public $shippingCost;

	/**
	* @var Address
	**/
	public $shippingAddress;

	/**
	* @var string
	**/
	public $returnMerchandiseAuthorization;

	/**
	* @var dateTime
	**/
	public $minEstDeliveryDate;

	/**
	* @var dateTime
	**/
	public $maxEstDeliveryDate;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ShipmentType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'shipmentStatus' =>
				array(
					'required' => false,
					'type' => 'ShipmentStatusType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'trackingNumber' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'carrierUsed' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'deliveryDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'shippingCost' =>
				array(
					'required' => false,
					'type' => 'Amount',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'shippingAddress' =>
				array(
					'required' => false,
					'type' => 'Address',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'returnMerchandiseAuthorization' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'minEstDeliveryDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'maxEstDeliveryDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	 * @return ShipmentStatusType
	 **/
	function getshipmentStatus()
	{
		return $this->shipmentStatus;
	}

	/**
	 * @return void
	 **/
	function setshipmentStatus($value)
	{
		$this->shipmentStatus = $value;
	}

	/**
	 * @return string
	 **/
	function gettrackingNumber()
	{
		return $this->trackingNumber;
	}

	/**
	 * @return void
	 **/
	function settrackingNumber($value)
	{
		$this->trackingNumber = $value;
	}

	/**
	 * @return string
	 **/
	function getcarrierUsed()
	{
		return $this->carrierUsed;
	}

	/**
	 * @return void
	 **/
	function setcarrierUsed($value)
	{
		$this->carrierUsed = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getdeliveryDate()
	{
		return $this->deliveryDate;
	}

	/**
	 * @return void
	 **/
	function setdeliveryDate($value)
	{
		$this->deliveryDate = $value;
	}

	/**
	 * @return Amount
	 **/
	function getshippingCost()
	{
		return $this->shippingCost;
	}

	/**
	 * @return void
	 **/
	function setshippingCost($value)
	{
		$this->shippingCost = $value;
	}

	/**
	 * @return Address
	 **/
	function getshippingAddress()
	{
		return $this->shippingAddress;
	}

	/**
	 * @return void
	 **/
	function setshippingAddress($value)
	{
		$this->shippingAddress = $value;
	}

	/**
	 * @return string
	 **/
	function getreturnMerchandiseAuthorization()
	{
		return $this->returnMerchandiseAuthorization;
	}

	/**
	 * @return void
	 **/
	function setreturnMerchandiseAuthorization($value)
	{
		$this->returnMerchandiseAuthorization = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getminEstDeliveryDate()
	{
		return $this->minEstDeliveryDate;
	}

	/**
	 * @return void
	 **/
	function setminEstDeliveryDate($value)
	{
		$this->minEstDeliveryDate = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getmaxEstDeliveryDate()
	{
		return $this->maxEstDeliveryDate;
	}

	/**
	 * @return void
	 **/
	function setmaxEstDeliveryDate($value)
	{
		$this->maxEstDeliveryDate = $value;
	}

}
?>
