<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseRequest.php';
require_once 'ReturnIdType.php';
require_once 'RefundDetailType.php';

/**
  *   Type defining the <b>issueRefund</b> request. This call is used by a  seller
  * to issue a refund (PayPal only) to the buyer to resolve a return. The refund operation
  * may involve one or more of the following: purchase price refund, original shipping
  * refund, and/or a restocking fee charge.
  *   
 **/

class IssueRefundRequest extends BaseRequest
{
	/**
	* @var ReturnIdType
	**/
	public $ReturnId;

	/**
	* @var RefundDetailType
	**/
	public $refundDetail;

	/**
	* @var string
	**/
	public $comments;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('IssueRefundRequest', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ReturnId' =>
				array(
					'required' => false,
					'type' => 'ReturnIdType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'refundDetail' =>
				array(
					'required' => false,
					'type' => 'RefundDetailType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'comments' =>
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
	 * @return ReturnIdType
	 **/
	function getReturnId()
	{
		return $this->ReturnId;
	}

	/**
	 * @return void
	 **/
	function setReturnId($value)
	{
		$this->ReturnId = $value;
	}

	/**
	 * @return RefundDetailType
	 **/
	function getrefundDetail()
	{
		return $this->refundDetail;
	}

	/**
	 * @return void
	 **/
	function setrefundDetail($value)
	{
		$this->refundDetail = $value;
	}

	/**
	 * @return string
	 **/
	function getcomments()
	{
		return $this->comments;
	}

	/**
	 * @return void
	 **/
	function setcomments($value)
	{
		$this->comments = $value;
	}

}
?>
