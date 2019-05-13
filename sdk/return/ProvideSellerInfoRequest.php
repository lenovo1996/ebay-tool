<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseRequest.php';
require_once 'ReturnIdType.php';
require_once 'Address.php';

/**
  *   Type defining the <b>provideSellerInfo</b> request. This call is used by a seller to
  * provide a Return Merchandise Authorization number and/or a return shipping address to the 
  * buyer.
  *   
 **/

class ProvideSellerInfoRequest extends BaseRequest
{
	/**
	* @var ReturnIdType
	**/
	public $ReturnId;

	/**
	* @var string
	**/
	public $returnMerchandiseAuthorization;

	/**
	* @var Address
	**/
	public $returnAddress;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProvideSellerInfoRequest', 'http://www.ebay.com/marketplace/returns/v1/services');
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
				'returnMerchandiseAuthorization' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'returnAddress' =>
				array(
					'required' => false,
					'type' => 'Address',
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

	/**
	 * @return string
	 **/
	function getreturnMerchandiseAuthorization()
	{
		return $this->returnMerchandiseAuthorization;
	}

	/**
	 * @return void
	 **/
	function setreturnMerchandiseAuthorization($value)
	{
		$this->returnMerchandiseAuthorization = $value;
	}

	/**
	 * @return Address
	 **/
	function getreturnAddress()
	{
		return $this->returnAddress;
	}

	/**
	 * @return void
	 **/
	function setreturnAddress($value)
	{
		$this->returnAddress = $value;
	}

}
?>
