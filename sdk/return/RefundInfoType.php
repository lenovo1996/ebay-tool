<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'EstimatedRefundDetailType.php';
require_once 'ActualRefundDetailType.php';

/**
  * Type defining the <b>refundInfo</b> container, which consists of details and
  * values related to estimated, actual, and itemized refunds to the buyer. 
  * 
 **/

class RefundInfoType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var dateTime
	**/
	public $refundDue;

	/**
	* @var EstimatedRefundDetailType
	**/
	public $estimatedRefundDetail;

	/**
	* @var ActualRefundDetailType
	**/
	public $actualRefundDetail;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RefundInfoType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'refundDue' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'estimatedRefundDetail' =>
				array(
					'required' => false,
					'type' => 'EstimatedRefundDetailType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'actualRefundDetail' =>
				array(
					'required' => false,
					'type' => 'ActualRefundDetailType',
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
	 * @return dateTime
	 **/
	function getrefundDue()
	{
		return $this->refundDue;
	}

	/**
	 * @return void
	 **/
	function setrefundDue($value)
	{
		$this->refundDue = $value;
	}

	/**
	 * @return EstimatedRefundDetailType
	 **/
	function getestimatedRefundDetail()
	{
		return $this->estimatedRefundDetail;
	}

	/**
	 * @return void
	 **/
	function setestimatedRefundDetail($value)
	{
		$this->estimatedRefundDetail = $value;
	}

	/**
	 * @return ActualRefundDetailType
	 **/
	function getactualRefundDetail()
	{
		return $this->actualRefundDetail;
	}

	/**
	 * @return void
	 **/
	function setactualRefundDetail($value)
	{
		$this->actualRefundDetail = $value;
	}

}
?>
