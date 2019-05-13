<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseActivityOptionType.php';

/**
  *   Type defining the <b>ISSUE_REFUND</b> activity option. If the <b>ISSUE_REFUND</b> 
  *   activity option is returned in the <b>getActivityOptions</b> response, the
  * seller can use the <b>issueRefund</b> call to issue a refund to the buyer.  
  * container.
  *   
 **/

class IssueRefundOptionType extends BaseActivityOptionType
{
	/**
	* @var integer
	**/
	public $daysToRefundBuyer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('IssueRefundOptionType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'daysToRefundBuyer' =>
				array(
					'required' => false,
					'type' => 'integer',
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
	 * @return integer
	 **/
	function getdaysToRefundBuyer()
	{
		return $this->daysToRefundBuyer;
	}

	/**
	 * @return void
	 **/
	function setdaysToRefundBuyer($value)
	{
		$this->daysToRefundBuyer = $value;
	}

}
?>
