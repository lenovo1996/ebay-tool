<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseResponse.php';
require_once 'RefundStatusType.php';

/**
  *   Type defining the <b>issueRefund</b> response. The only call-specific output 
  *   field of <b>issueRefund</b> is <b>RefundStatus</b>.
  *   
 **/

class IssueRefundResponse extends BaseResponse
{
	/**
	* @var RefundStatusType
	**/
	public $RefundStatus;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('IssueRefundResponse', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RefundStatus' =>
				array(
					'required' => false,
					'type' => 'RefundStatusType',
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
	 * @return RefundStatusType
	 **/
	function getRefundStatus()
	{
		return $this->RefundStatus;
	}

	/**
	 * @return void
	 **/
	function setRefundStatus($value)
	{
		$this->RefundStatus = $value;
	}

}
?>
