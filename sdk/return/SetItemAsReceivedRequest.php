<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseRequest.php';
require_once 'ReturnIdType.php';

/**
  *   Type defining the <b>setItemAsReceived</b> request. This call is used by a buyer or seller to mark an order line item as received. This action can be performed based on the status of the
  * return.
  * 
 **/

class SetItemAsReceivedRequest extends BaseRequest
{
	/**
	* @var ReturnIdType
	**/
	public $ReturnId;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetItemAsReceivedRequest', 'http://www.ebay.com/marketplace/returns/v1/services');
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

}
?>
