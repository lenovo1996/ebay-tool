<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'IssueRefundOptionType.php';
require_once 'ProvideSellerInfoOptionType.php';

/**
  * Type that defines the <b>activityOptions</b> field, which contains an enumeration
  * value that indicates the next possible action that a seller can take to resolve a return. 
  * 
 **/

class ActivityOptionListType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var IssueRefundOptionType
	**/
	public $issueRefund;

	/**
	* @var ProvideSellerInfoOptionType
	**/
	public $provideSellerInfo;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ActivityOptionListType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'issueRefund' =>
				array(
					'required' => false,
					'type' => 'IssueRefundOptionType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'provideSellerInfo' =>
				array(
					'required' => false,
					'type' => 'ProvideSellerInfoOptionType',
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
	 * @return IssueRefundOptionType
	 **/
	function getissueRefund()
	{
		return $this->issueRefund;
	}

	/**
	 * @return void
	 **/
	function setissueRefund($value)
	{
		$this->issueRefund = $value;
	}

	/**
	 * @return ProvideSellerInfoOptionType
	 **/
	function getprovideSellerInfo()
	{
		return $this->provideSellerInfo;
	}

	/**
	 * @return void
	 **/
	function setprovideSellerInfo($value)
	{
		$this->provideSellerInfo = $value;
	}

}
?>
