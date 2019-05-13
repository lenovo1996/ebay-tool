<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseResponse.php';

/**
  * Response container for the <b>getVersion</b> API call.
  * 
 **/

class GetVersionResponse extends BaseResponse
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetVersionResponse', 'http://www.ebay.com/marketplace/returns/v1/services');
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
