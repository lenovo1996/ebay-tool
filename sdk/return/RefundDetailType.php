<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'Amount.php';
require_once 'ItemizedRefundDetailType.php';

/**
  * Type defining the <b>refundDetail</b> container, which is the root container of 
  * all details related to actual and estimated refunds.
  * 
 **/

class RefundDetailType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var Amount
	**/
	public $totalAmount;

	/**
	* @var ItemizedRefundDetailType
	**/
	public $itemizedRefund;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RefundDetailType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'totalAmount' =>
				array(
					'required' => false,
					'type' => 'Amount',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'itemizedRefund' =>
				array(
					'required' => false,
					'type' => 'ItemizedRefundDetailType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return Amount
	 **/
	function gettotalAmount()
	{
		return $this->totalAmount;
	}

	/**
	 * @return void
	 **/
	function settotalAmount($value)
	{
		$this->totalAmount = $value;
	}

	/**
	 * @return ItemizedRefundDetailType
	 * @param integer $index 
	 **/
	function getitemizedRefund($index = null)
	{
		if ($index !== null)
		{
			return $this->itemizedRefund[$index];
		}
		else
		{
			return $this->itemizedRefund;
		}
	}

	/**
	 * @return void
	 * @param ItemizedRefundDetailType $value
	 * @param integer $index 
	 **/
	function setitemizedRefund($value, $index = null)
	{
		if ($index !== null)
		{
			$this->itemizedRefund[$index] = $value;
		}
		else
		{
			$this->itemizedRefund= $value;
		}
	}

	/**
	 * @return void
	 * @param ItemizedRefundDetailType $value
	 **/
	function additemizedRefund($value)
	{
		$this->itemizedRefund[] = $value;
	}

}
?>
