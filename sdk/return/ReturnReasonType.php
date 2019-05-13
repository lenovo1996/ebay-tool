<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EnumerationDetailType.php';

/**
  * This type defines the buyer's reason for returning an item, and is used by the
  * <b>ReturnSummary.returnRequest.returnReason</b> field in the response of the
  * <b>getUserReturns</b> and <b>getReturnDetail</b> calls. The <b>returnReason</b> 
  * is always returned.
  * 
 **/

class ReturnReasonType extends EnumerationDetailType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnReasonType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

}
?>
