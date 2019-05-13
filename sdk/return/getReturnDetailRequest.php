<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseRequest.php';
require_once 'ReturnIdType.php';

/**
  * This type defines the <b>getReturnDetails</b> request. This call requires the 
  * caller to pass in an Authentication Token as described in
  * <a href="http://developer.ebay.com/DevZone/XML/docs/HowTo/Tokens/GettingTokens.html">Getting Tokens</a> tutorial.
  * 
 **/

class getReturnDetailRequest extends BaseRequest
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
		parent::__construct('getReturnDetailRequest', 'http://www.ebay.com/marketplace/returns/v1/services');
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
