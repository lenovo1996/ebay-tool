<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'UserFilterRoleType.php';

/**
  *       Type defining the <b>otherUserFilter</b> container, which is a filter used in 
  *       <b>getUserReturns</b> to restrict results to returns involving a specific 
  *       buyer or seller.
  *     
 **/

class UserFilterType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var string
	**/
	public $userId;

	/**
	* @var string
	**/
	public $userLoginName;

	/**
	* @var UserFilterRoleType
	**/
	public $role;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('UserFilterType', 'http://www.ebay.com/marketplace/returns/v1/services');
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
				'userLoginName' =>
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
					'type' => 'UserFilterRoleType',
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
	 * @return string
	 **/
	function getuserLoginName()
	{
		return $this->userLoginName;
	}

	/**
	 * @return void
	 **/
	function setuserLoginName($value)
	{
		$this->userLoginName = $value;
	}

	/**
	 * @return UserFilterRoleType
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
