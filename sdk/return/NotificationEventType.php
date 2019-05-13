<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'NotificationEventNameType.php';
require_once 'ReturnUserRoleType.php';

/**
  *               Type defining the <b>NotificationEvent</b> element.
  *             
 **/

class NotificationEventType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var NotificationEventNameType
	**/
	public $NotificationEventName;

	/**
	* @var string
	**/
	public $RecipientUserID;

	/**
	* @var string
	**/
	public $ExternalUserData;

	/**
	* @var string
	**/
	public $ReturnId;

	/**
	* @var dateTime
	**/
	public $CreationDate;

	/**
	* @var string
	**/
	public $OtherPartyId;

	/**
	* @var ReturnUserRoleType
	**/
	public $OtherPartyRole;

	/**
	* @var string
	**/
	public $ReturnStatus;

	/**
	* @var token
	**/
	public $ReturnGlobalId;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NotificationEventType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'NotificationEventName' =>
				array(
					'required' => false,
					'type' => 'NotificationEventNameType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RecipientUserID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalUserData' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnId' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CreationDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OtherPartyId' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OtherPartyRole' =>
				array(
					'required' => false,
					'type' => 'ReturnUserRoleType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnStatus' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnGlobalId' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return NotificationEventNameType
	 **/
	function getNotificationEventName()
	{
		return $this->NotificationEventName;
	}

	/**
	 * @return void
	 **/
	function setNotificationEventName($value)
	{
		$this->NotificationEventName = $value;
	}

	/**
	 * @return string
	 **/
	function getRecipientUserID()
	{
		return $this->RecipientUserID;
	}

	/**
	 * @return void
	 **/
	function setRecipientUserID($value)
	{
		$this->RecipientUserID = $value;
	}

	/**
	 * @return string
	 **/
	function getExternalUserData()
	{
		return $this->ExternalUserData;
	}

	/**
	 * @return void
	 **/
	function setExternalUserData($value)
	{
		$this->ExternalUserData = $value;
	}

	/**
	 * @return string
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
	 * @return dateTime
	 **/
	function getCreationDate()
	{
		return $this->CreationDate;
	}

	/**
	 * @return void
	 **/
	function setCreationDate($value)
	{
		$this->CreationDate = $value;
	}

	/**
	 * @return string
	 **/
	function getOtherPartyId()
	{
		return $this->OtherPartyId;
	}

	/**
	 * @return void
	 **/
	function setOtherPartyId($value)
	{
		$this->OtherPartyId = $value;
	}

	/**
	 * @return ReturnUserRoleType
	 **/
	function getOtherPartyRole()
	{
		return $this->OtherPartyRole;
	}

	/**
	 * @return void
	 **/
	function setOtherPartyRole($value)
	{
		$this->OtherPartyRole = $value;
	}

	/**
	 * @return string
	 **/
	function getReturnStatus()
	{
		return $this->ReturnStatus;
	}

	/**
	 * @return void
	 **/
	function setReturnStatus($value)
	{
		$this->ReturnStatus = $value;
	}

	/**
	 * @return token
	 **/
	function getReturnGlobalId()
	{
		return $this->ReturnGlobalId;
	}

	/**
	 * @return void
	 **/
	function setReturnGlobalId($value)
	{
		$this->ReturnGlobalId = $value;
	}

}
?>
