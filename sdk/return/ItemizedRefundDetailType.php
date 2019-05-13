<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'RefundFeeType.php';
require_once 'Amount.php';

/**
  * Type defining the <b>itemizedRefund</b> container. One <b>itemizedRefund</b> 
  * container appears under an <b>estimatedRefundDetail</b> or an <b>actualRefundDetail</b> 
  * container per refund fee type. The idea behind the <b>itemizedRefund</b>
  * container is to track estimated and actual individual refund amounts by fee type (such as 
  * purchase price, original shipping, or restocking fee).
  * 
 **/

class ItemizedRefundDetailType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var RefundFeeType
	**/
	public $refundFeeType;

	/**
	* @var Amount
	**/
	public $amount;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemizedRefundDetailType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'refundFeeType' =>
				array(
					'required' => false,
					'type' => 'RefundFeeType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'amount' =>
				array(
					'required' => false,
					'type' => 'Amount',
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
	 * @return RefundFeeType
	 **/
	function getrefundFeeType()
	{
		return $this->refundFeeType;
	}

	/**
	 * @return void
	 **/
	function setrefundFeeType($value)
	{
		$this->refundFeeType = $value;
	}

	/**
	 * @return Amount
	 **/
	function getamount()
	{
		return $this->amount;
	}

	/**
	 * @return void
	 **/
	function setamount($value)
	{
		$this->amount = $value;
	}

}
?>
