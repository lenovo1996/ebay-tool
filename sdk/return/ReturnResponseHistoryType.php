<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'ReturnUserType.php';
require_once 'ActivityDetailType.php';

/**
  * Type defining the <b>returnHistory</b> container, which consists of details
  * related to each activity in a return. A <b>returnHistory</b> node is
  * returned for each activity that has occurred with the return.
  * 
 **/

class ReturnResponseHistoryType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var string
	**/
	public $note;

	/**
	* @var ReturnUserType
	**/
	public $author;

	/**
	* @var ActivityDetailType
	**/
	public $activityDetail;

	/**
	* @var dateTime
	**/
	public $creationDate;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnResponseHistoryType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'note' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'author' =>
				array(
					'required' => false,
					'type' => 'ReturnUserType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'activityDetail' =>
				array(
					'required' => false,
					'type' => 'ActivityDetailType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'creationDate' =>
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
	 * @return string
	 **/
	function getnote()
	{
		return $this->note;
	}

	/**
	 * @return void
	 **/
	function setnote($value)
	{
		$this->note = $value;
	}

	/**
	 * @return ReturnUserType
	 **/
	function getauthor()
	{
		return $this->author;
	}

	/**
	 * @return void
	 **/
	function setauthor($value)
	{
		$this->author = $value;
	}

	/**
	 * @return ActivityDetailType
	 **/
	function getactivityDetail()
	{
		return $this->activityDetail;
	}

	/**
	 * @return void
	 **/
	function setactivityDetail($value)
	{
		$this->activityDetail = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getcreationDate()
	{
		return $this->creationDate;
	}

	/**
	 * @return void
	 **/
	function setcreationDate($value)
	{
		$this->creationDate = $value;
	}

}
?>
