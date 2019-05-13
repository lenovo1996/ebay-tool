<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'ReturnResponseHistoryType.php';
require_once 'RefundInfoType.php';
require_once 'ReturnPolicyInfoType.php';
require_once 'ShipmentType.php';
require_once 'CaseIdType.php';

/**
  * Type defining the <b>ReturnDetail</b> container returned in <b>getReturnDetail</b>. 
  * All information for a single return is returned under the <b>ReturnDetail</b> 
  * container.
  * 
 **/

class ReturnDetailType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var token
	**/
	public $globalId;

	/**
	* @var ReturnResponseHistoryType
	**/
	public $returnHistory;

	/**
	* @var RefundInfoType
	**/
	public $refundInfo;

	/**
	* @var ReturnPolicyInfoType
	**/
	public $returnPolicy;

	/**
	* @var ShipmentType
	**/
	public $buyerReturnShipment;

	/**
	* @var ShipmentType
	**/
	public $shipmentInfo;

	/**
	* @var CaseIdType
	**/
	public $caseId;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnDetailType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'globalId' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'returnHistory' =>
				array(
					'required' => false,
					'type' => 'ReturnResponseHistoryType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => true,
					'cardinality' => '0..*'
				),
				'refundInfo' =>
				array(
					'required' => false,
					'type' => 'RefundInfoType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'returnPolicy' =>
				array(
					'required' => false,
					'type' => 'ReturnPolicyInfoType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'buyerReturnShipment' =>
				array(
					'required' => false,
					'type' => 'ShipmentType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'shipmentInfo' =>
				array(
					'required' => false,
					'type' => 'ShipmentType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => true,
					'cardinality' => '0..*'
				),
				'caseId' =>
				array(
					'required' => false,
					'type' => 'CaseIdType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return token
	 **/
	function getglobalId()
	{
		return $this->globalId;
	}

	/**
	 * @return void
	 **/
	function setglobalId($value)
	{
		$this->globalId = $value;
	}

	/**
	 * @return ReturnResponseHistoryType
	 * @param integer $index 
	 **/
	function getreturnHistory($index = null)
	{
		if ($index !== null)
		{
			return $this->returnHistory[$index];
		}
		else
		{
			return $this->returnHistory;
		}
	}

	/**
	 * @return void
	 * @param ReturnResponseHistoryType $value
	 * @param integer $index 
	 **/
	function setreturnHistory($value, $index = null)
	{
		if ($index !== null)
		{
			$this->returnHistory[$index] = $value;
		}
		else
		{
			$this->returnHistory= $value;
		}
	}

	/**
	 * @return void
	 * @param ReturnResponseHistoryType $value
	 **/
	function addreturnHistory($value)
	{
		$this->returnHistory[] = $value;
	}

	/**
	 * @return RefundInfoType
	 **/
	function getrefundInfo()
	{
		return $this->refundInfo;
	}

	/**
	 * @return void
	 **/
	function setrefundInfo($value)
	{
		$this->refundInfo = $value;
	}

	/**
	 * @return ReturnPolicyInfoType
	 **/
	function getreturnPolicy()
	{
		return $this->returnPolicy;
	}

	/**
	 * @return void
	 **/
	function setreturnPolicy($value)
	{
		$this->returnPolicy = $value;
	}

	/**
	 * @return ShipmentType
	 **/
	function getbuyerReturnShipment()
	{
		return $this->buyerReturnShipment;
	}

	/**
	 * @return void
	 **/
	function setbuyerReturnShipment($value)
	{
		$this->buyerReturnShipment = $value;
	}

	/**
	 * @return ShipmentType
	 * @param integer $index 
	 **/
	function getshipmentInfo($index = null)
	{
		if ($index !== null)
		{
			return $this->shipmentInfo[$index];
		}
		else
		{
			return $this->shipmentInfo;
		}
	}

	/**
	 * @return void
	 * @param ShipmentType $value
	 * @param integer $index 
	 **/
	function setshipmentInfo($value, $index = null)
	{
		if ($index !== null)
		{
			$this->shipmentInfo[$index] = $value;
		}
		else
		{
			$this->shipmentInfo= $value;
		}
	}

	/**
	 * @return void
	 * @param ShipmentType $value
	 **/
	function addshipmentInfo($value)
	{
		$this->shipmentInfo[] = $value;
	}

	/**
	 * @return CaseIdType
	 **/
	function getcaseId()
	{
		return $this->caseId;
	}

	/**
	 * @return void
	 **/
	function setcaseId($value)
	{
		$this->caseId = $value;
	}

}
?>
