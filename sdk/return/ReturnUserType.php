<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'ReturnUserRoleType.php';

/**
  * Type used by the <b>ReturnSummary.user</b> and <b>ReturnSummary.otherParty</b> 
  * containers in the <b>getUserReturns</b> and <b>getReturnDetail</b> 
  * calls to identify a user involved in a return.
  * 
 **/

class ReturnUserType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var string
	**/
	public $userId;

	/**
	* @var ReturnUserRoleType
	**/
	public $role;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnUserType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'userId' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'role' =>
				array(
					'required' => false,
					'type' => 'ReturnUserRoleType',
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
	 * @return string
	 **/
	function getuserId()
	{
		return $this->userId;
	}

	/**
	 * @return void
	 **/
	function setuserId($value)
	{
		$this->userId = $value;
	}

	/**
	 * @return ReturnUserRoleType
	 **/
	function getrole()
	{
		return $this->role;
	}

	/**
	 * @return void
	 **/
	function setrole($value)
	{
		$this->role = $value;
	}

}
?>
