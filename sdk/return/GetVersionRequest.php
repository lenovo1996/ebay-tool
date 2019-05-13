<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseRequest.php';

/**
  * This call is used to return the current version of Return Management Service. This call can
  * be used to monitor the service for availability. This call has no input parameters and the
  * response contains only the standard output fields.
  * 
 **/

class GetVersionRequest extends BaseRequest
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetVersionRequest', 'http://www.ebay.com/marketplace/returns/v1/services');
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
