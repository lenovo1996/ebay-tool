<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'DisputeMessageSourceCodeType.php';

/**
  * Contains a message posted to a dispute. The message can be posted
  * by the buyer, the seller, or an eBay representative.
  * <br/><br/>
  * <span class="tablenote"><strong>Note:</strong>
  * These are not eBay money back guarantee disputes.
  * </span>
  * 
 **/

class DisputeMessageType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	public $MessageID;

	/**
	* @var DisputeMessageSourceCodeType
	**/
	public $MessageSource;

	/**
	* @var dateTime
	**/
	public $MessageCreationTime;

	/**
	* @var string
	**/
	public $MessageText;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DisputeMessageType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MessageID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageSource' =>
				array(
					'required' => false,
					'type' => 'DisputeMessageSourceCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageCreationTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageText' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return int
	 **/
	function getMessageID()
	{
		return $this->MessageID;
	}

	/**
	 * @return void
	 **/
	function setMessageID($value)
	{
		$this->MessageID = $value;
	}

	/**
	 * @return DisputeMessageSourceCodeType
	 **/
	function getMessageSource()
	{
		return $this->MessageSource;
	}

	/**
	 * @return void
	 **/
	function setMessageSource($value)
	{
		$this->MessageSource = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getMessageCreationTime()
	{
		return $this->MessageCreationTime;
	}

	/**
	 * @return void
	 **/
	function setMessageCreationTime($value)
	{
		$this->MessageCreationTime = $value;
	}

	/**
	 * @return string
	 **/
	function getMessageText()
	{
		return $this->MessageText;
	}

	/**
	 * @return void
	 **/
	function setMessageText($value)
	{
		$this->MessageText = $value;
	}

}
?>
