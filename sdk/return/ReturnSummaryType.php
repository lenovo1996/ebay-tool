<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'ReturnIdType.php';
require_once 'ReturnType.php';
require_once 'ReturnUserType.php';
require_once 'ReturnRequestType.php';
require_once 'ReturnStatusType.php';
require_once 'ReturnResponseDueType.php';

/**
  * Type defining the <b>ReturnSummary</b> container. A <b>ReturnSummary</b>
  * container is returned in the requests for the <b>getUserReturns</b> and <b>getReturnDetail</b> 
  * calls for each return matching the input criteria. 
  * 
 **/

class ReturnSummaryType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var ReturnIdType
	**/
	public $ReturnId;

	/**
	* @var ReturnType
	**/
	public $ReturnType;

	/**
	* @var ReturnUserType
	**/
	public $otherParty;

	/**
	* @var ReturnRequestType
	**/
	public $returnRequest;

	/**
	* @var ReturnStatusType
	**/
	public $status;

	/**
	* @var ReturnResponseDueType
	**/
	public $responseDue;

	/**
	* @var dateTime
	**/
	public $creationDate;

	/**
	* @var dateTime
	**/
	public $lastModifiedDate;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnSummaryType', 'http://www.ebay.com/marketplace/returns/v1/services');
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
				'ReturnType' =>
				array(
					'required' => false,
					'type' => 'ReturnType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'otherParty' =>
				array(
					'required' => false,
					'type' => 'ReturnUserType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'returnRequest' =>
				array(
					'required' => false,
					'type' => 'ReturnRequestType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'status' =>
				array(
					'required' => false,
					'type' => 'ReturnStatusType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'responseDue' =>
				array(
					'required' => false,
					'type' => 'ReturnResponseDueType',
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
				),
				'lastModifiedDate' =>
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
	 * @return ReturnType
	 **/
	function getReturnType()
	{
		return $this->ReturnType;
	}

	/**
	 * @return void
	 **/
	function setReturnType($value)
	{
		$this->ReturnType = $value;
	}

	/**
	 * @return ReturnUserType
	 **/
	function getotherParty()
	{
		return $this->otherParty;
	}

	/**
	 * @return void
	 **/
	function setotherParty($value)
	{
		$this->otherParty = $value;
	}

	/**
	 * @return ReturnRequestType
	 **/
	function getreturnRequest()
	{
		return $this->returnRequest;
	}

	/**
	 * @return void
	 **/
	function setreturnRequest($value)
	{
		$this->returnRequest = $value;
	}

	/**
	 * @return ReturnStatusType
	 **/
	function getstatus()
	{
		return $this->status;
	}

	/**
	 * @return void
	 **/
	function setstatus($value)
	{
		$this->status = $value;
	}

	/**
	 * @return ReturnResponseDueType
	 **/
	function getresponseDue()
	{
		return $this->responseDue;
	}

	/**
	 * @return void
	 **/
	function setresponseDue($value)
	{
		$this->responseDue = $value;
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

	/**
	 * @return dateTime
	 **/
	function getlastModifiedDate()
	{
		return $this->lastModifiedDate;
	}

	/**
	 * @return void
	 **/
	function setlastModifiedDate($value)
	{
		$this->lastModifiedDate = $value;
	}

}
?>
