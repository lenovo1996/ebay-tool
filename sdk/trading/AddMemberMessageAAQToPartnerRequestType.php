<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'MemberMessageType.php';

/**
  * Enables a buyer and seller in an order relationship to
  * send messages to each other's My Messages Inboxes.
  * 
 **/

class AddMemberMessageAAQToPartnerRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	public $ItemID;

	/**
	* @var MemberMessageType
	**/
	public $MemberMessage;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddMemberMessageAAQToPartnerRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MemberMessage' =>
				array(
					'required' => false,
					'type' => 'MemberMessageType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

	/**
	 * @return MemberMessageType
	 **/
	function getMemberMessage()
	{
		return $this->MemberMessage;
	}

	/**
	 * @return void
	 **/
	function setMemberMessage($value)
	{
		$this->MemberMessage = $value;
	}

}
?>
