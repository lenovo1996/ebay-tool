<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'MessageStatusTypeCodeType.php';

/**
  * Retrieves sales lead information for a lead generation listing.
  * 
 **/

class GetAdFormatLeadsRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	public $ItemID;

	/**
	* @var MessageStatusTypeCodeType
	**/
	public $Status;

	/**
	* @var boolean
	**/
	public $IncludeMemberMessages;

	/**
	* @var dateTime
	**/
	public $StartCreationTime;

	/**
	* @var dateTime
	**/
	public $EndCreationTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetAdFormatLeadsRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				'Status' =>
				array(
					'required' => false,
					'type' => 'MessageStatusTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeMemberMessages' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StartCreationTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndCreationTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	 * @return MessageStatusTypeCodeType
	 **/
	function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @return void
	 **/
	function setStatus($value)
	{
		$this->Status = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeMemberMessages()
	{
		return $this->IncludeMemberMessages;
	}

	/**
	 * @return void
	 **/
	function setIncludeMemberMessages($value)
	{
		$this->IncludeMemberMessages = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getStartCreationTime()
	{
		return $this->StartCreationTime;
	}

	/**
	 * @return void
	 **/
	function setStartCreationTime($value)
	{
		$this->StartCreationTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEndCreationTime()
	{
		return $this->EndCreationTime;
	}

	/**
	 * @return void
	 **/
	function setEndCreationTime($value)
	{
		$this->EndCreationTime = $value;
	}

}
?>
