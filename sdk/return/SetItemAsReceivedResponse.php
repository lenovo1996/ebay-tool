<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseResponse.php';

/**
  * Type defining the <b>setItemAsReceived</b> response. There are no call-specific fields 
  * in the <b>setItemAsReceived</b> response. The caller should look for an
  * <b>ack</b> value of 'Success' to determine the success of the call.
  * 
 **/

class SetItemAsReceivedResponse extends BaseResponse
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetItemAsReceivedResponse', 'http://www.ebay.com/marketplace/returns/v1/services');
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
