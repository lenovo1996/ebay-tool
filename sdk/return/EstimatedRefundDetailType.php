<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'RefundDetailType.php';
require_once 'ItemizedRefundDetailType.php';

/**
  * Type defining the <b>estimatedRefundDetail</b> container, which consists of
  * details related to an estimated seller refund, including the total refund amount, an itemized
  * list of one or more anticipated refund fee types (such as purchase price or original shipping), 
  * and an itemized list of one or more optional refund fee types.
  * 
 **/

class EstimatedRefundDetailType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var RefundDetailType
	**/
	public $estimatedRefund;

	/**
	* @var ItemizedRefundDetailType
	**/
	public $itemizedOptionalRefund;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('EstimatedRefundDetailType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'estimatedRefund' =>
				array(
					'required' => false,
					'type' => 'RefundDetailType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'itemizedOptionalRefund' =>
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
	 * @return RefundDetailType
	 **/
	function getestimatedRefund()
	{
		return $this->estimatedRefund;
	}

	/**
	 * @return void
	 **/
	function setestimatedRefund($value)
	{
		$this->estimatedRefund = $value;
	}

	/**
	 * @return ItemizedRefundDetailType
	 * @param integer $index 
	 **/
	function getitemizedOptionalRefund($index = null)
	{
		if ($index !== null)
		{
			return $this->itemizedOptionalRefund[$index];
		}
		else
		{
			return $this->itemizedOptionalRefund;
		}
	}

	/**
	 * @return void
	 * @param ItemizedRefundDetailType $value
	 * @param integer $index 
	 **/
	function setitemizedOptionalRefund($value, $index = null)
	{
		if ($index !== null)
		{
			$this->itemizedOptionalRefund[$index] = $value;
		}
		else
		{
			$this->itemizedOptionalRefund= $value;
		}
	}

	/**
	 * @return void
	 * @param ItemizedRefundDetailType $value
	 **/
	function additemizedOptionalRefund($value)
	{
		$this->itemizedOptionalRefund[] = $value;
	}

}
?>
