<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'RefundDetailType.php';
require_once 'RefundStatusType.php';

/**
  * Type defining the <b>actualRefundDetail</b> container, which consists of details
  * related to an actual seller refund, including the total refund amount, the date of the refund, 
  * the status of the refund, and an itemized list of one or more refund fee types (such as 
  * purchase price or original shipping). 
  * 
 **/

class ActualRefundDetailType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var RefundDetailType
	**/
	public $actualRefund;

	/**
	* @var RefundStatusType
	**/
	public $refundStatus;

	/**
	* @var dateTime
	**/
	public $refundDate;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ActualRefundDetailType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'actualRefund' =>
				array(
					'required' => false,
					'type' => 'RefundDetailType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'refundStatus' =>
				array(
					'required' => false,
					'type' => 'RefundStatusType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'refundDate' =>
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
	 * @return RefundDetailType
	 **/
	function getactualRefund()
	{
		return $this->actualRefund;
	}

	/**
	 * @return void
	 **/
	function setactualRefund($value)
	{
		$this->actualRefund = $value;
	}

	/**
	 * @return RefundStatusType
	 **/
	function getrefundStatus()
	{
		return $this->refundStatus;
	}

	/**
	 * @return void
	 **/
	function setrefundStatus($value)
	{
		$this->refundStatus = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getrefundDate()
	{
		return $this->refundDate;
	}

	/**
	 * @return void
	 **/
	function setrefundDate($value)
	{
		$this->refundDate = $value;
	}

}
?>
