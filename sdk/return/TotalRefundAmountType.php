<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'Amount.php';

/**
  * Type defining the <b>totalRefundAmount</b> container. This container contains the 
  * estimated and actual refund amounts.
  * 
 **/

class TotalRefundAmountType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var Amount
	**/
	public $estimatedRefundAmount;

	/**
	* @var Amount
	**/
	public $actualRefundAmount;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('TotalRefundAmountType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'estimatedRefundAmount' =>
				array(
					'required' => false,
					'type' => 'Amount',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'actualRefundAmount' =>
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
	 * @return Amount
	 **/
	function getestimatedRefundAmount()
	{
		return $this->estimatedRefundAmount;
	}

	/**
	 * @return void
	 **/
	function setestimatedRefundAmount($value)
	{
		$this->estimatedRefundAmount = $value;
	}

	/**
	 * @return Amount
	 **/
	function getactualRefundAmount()
	{
		return $this->actualRefundAmount;
	}

	/**
	 * @return void
	 **/
	function setactualRefundAmount($value)
	{
		$this->actualRefundAmount = $value;
	}

}
?>
