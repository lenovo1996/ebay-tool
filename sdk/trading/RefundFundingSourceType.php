<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'RefundingSourceTypeCodeType.php';
require_once 'AmountType.php';

/**
  * This type is deprecated.
  * 
 **/

class RefundFundingSourceType extends EbatNs_ComplexType
{
	/**
	* @var RefundingSourceTypeCodeType
	**/
	public $RefundingSourceType;

	/**
	* @var string
	**/
	public $AccountNumber;

	/**
	* @var AmountType
	**/
	public $RefundAmount;

	/**
	* @var string
	**/
	public $SellerExternalTransactionID;

	/**
	* @var string
	**/
	public $BuyerExternalTransactionID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RefundFundingSourceType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RefundingSourceType' =>
				array(
					'required' => false,
					'type' => 'RefundingSourceTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AccountNumber' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RefundAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerExternalTransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerExternalTransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return RefundingSourceTypeCodeType
	 **/
	function getRefundingSourceType()
	{
		return $this->RefundingSourceType;
	}

	/**
	 * @return void
	 **/
	function setRefundingSourceType($value)
	{
		$this->RefundingSourceType = $value;
	}

	/**
	 * @return string
	 **/
	function getAccountNumber()
	{
		return $this->AccountNumber;
	}

	/**
	 * @return void
	 **/
	function setAccountNumber($value)
	{
		$this->AccountNumber = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getRefundAmount()
	{
		return $this->RefundAmount;
	}

	/**
	 * @return void
	 **/
	function setRefundAmount($value)
	{
		$this->RefundAmount = $value;
	}

	/**
	 * @return string
	 **/
	function getSellerExternalTransactionID()
	{
		return $this->SellerExternalTransactionID;
	}

	/**
	 * @return void
	 **/
	function setSellerExternalTransactionID($value)
	{
		$this->SellerExternalTransactionID = $value;
	}

	/**
	 * @return string
	 **/
	function getBuyerExternalTransactionID()
	{
		return $this->BuyerExternalTransactionID;
	}

	/**
	 * @return void
	 **/
	function setBuyerExternalTransactionID($value)
	{
		$this->BuyerExternalTransactionID = $value;
	}

}
?>
