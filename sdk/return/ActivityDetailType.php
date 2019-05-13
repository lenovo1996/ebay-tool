<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EnumerationDetailType.php';

/**
  *   This type defines the <b>returnDetail.returnHistory.activityDetail</b> container
  * returned in the <b>getReturnDetail</b> response. This container is always
  * returned. The <b>description</b> child field describes the return activity.
  *  
 **/

class ActivityDetailType extends EnumerationDetailType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ActivityDetailType', 'http://www.ebay.com/marketplace/returns/v1/services');
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
