<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AddressType.php';
require_once 'ItemIDType.php';
require_once 'UserIDType.php';
require_once 'MemberMessageExchangeArrayType.php';
require_once 'AdFormatLeadStatusCodeType.php';
require_once 'AmountType.php';

/**
  * This type is used by the <b>AdFormatLead</b> container that is returned in the <b>GetAdFormatLeads</b> call response. An <b>AdFormatLead</b> container will be returned for each user that has expressed interest in the Classified Ad listing that was specified by the seller in the <b>GetAdFormatLeads</b> call request. Each <b>AdFormatLead</b> container consists of prospective buyer contact information and other details associated with a lead for a Classified Ad listing.
  * 
 **/

class AdFormatLeadType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	public $AdditionalInformation;

	/**
	* @var AddressType
	**/
	public $Address;

	/**
	* @var string
	**/
	public $BestTimeToCall;

	/**
	* @var string
	**/
	public $Email;

	/**
	* @var dateTime
	**/
	public $SubmittedTime;

	/**
	* @var ItemIDType
	**/
	public $ItemID;

	/**
	* @var string
	**/
	public $ItemTitle;

	/**
	* @var UserIDType
	**/
	public $UserID;

	/**
	* @var MemberMessageExchangeArrayType
	**/
	public $MemberMessage;

	/**
	* @var AdFormatLeadStatusCodeType
	**/
	public $Status;

	/**
	* @var AmountType
	**/
	public $LeadFee;

	/**
	* @var string
	**/
	public $ExternalEmail;

	/**
	* @var string
	**/
	public $PurchaseTimeFrame;

	/**
	* @var string
	**/
	public $TradeInYear;

	/**
	* @var string
	**/
	public $TradeInMake;

	/**
	* @var string
	**/
	public $TradeInModel;

	/**
	* @var boolean
	**/
	public $FinancingAnswer;

	/**
	* @var boolean
	**/
	public $Answer1;

	/**
	* @var boolean
	**/
	public $Answer2;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AdFormatLeadType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AdditionalInformation' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Address' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestTimeToCall' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Email' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SubmittedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemTitle' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MemberMessage' =>
				array(
					'required' => false,
					'type' => 'MemberMessageExchangeArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'AdFormatLeadStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LeadFee' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalEmail' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PurchaseTimeFrame' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TradeInYear' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TradeInMake' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TradeInModel' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FinancingAnswer' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Answer1' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Answer2' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	function getAdditionalInformation()
	{
		return $this->AdditionalInformation;
	}

	/**
	 * @return void
	 **/
	function setAdditionalInformation($value)
	{
		$this->AdditionalInformation = $value;
	}

	/**
	 * @return AddressType
	 **/
	function getAddress()
	{
		return $this->Address;
	}

	/**
	 * @return void
	 **/
	function setAddress($value)
	{
		$this->Address = $value;
	}

	/**
	 * @return string
	 **/
	function getBestTimeToCall()
	{
		return $this->BestTimeToCall;
	}

	/**
	 * @return void
	 **/
	function setBestTimeToCall($value)
	{
		$this->BestTimeToCall = $value;
	}

	/**
	 * @return string
	 **/
	function getEmail()
	{
		return $this->Email;
	}

	/**
	 * @return void
	 **/
	function setEmail($value)
	{
		$this->Email = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getSubmittedTime()
	{
		return $this->SubmittedTime;
	}

	/**
	 * @return void
	 **/
	function setSubmittedTime($value)
	{
		$this->SubmittedTime = $value;
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
	 * @return string
	 **/
	function getItemTitle()
	{
		return $this->ItemTitle;
	}

	/**
	 * @return void
	 **/
	function setItemTitle($value)
	{
		$this->ItemTitle = $value;
	}

	/**
	 * @return UserIDType
	 **/
	function getUserID()
	{
		return $this->UserID;
	}

	/**
	 * @return void
	 **/
	function setUserID($value)
	{
		$this->UserID = $value;
	}

	/**
	 * @return MemberMessageExchangeArrayType
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

	/**
	 * @return AdFormatLeadStatusCodeType
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
	 * @return AmountType
	 **/
	function getLeadFee()
	{
		return $this->LeadFee;
	}

	/**
	 * @return void
	 **/
	function setLeadFee($value)
	{
		$this->LeadFee = $value;
	}

	/**
	 * @return string
	 **/
	function getExternalEmail()
	{
		return $this->ExternalEmail;
	}

	/**
	 * @return void
	 **/
	function setExternalEmail($value)
	{
		$this->ExternalEmail = $value;
	}

	/**
	 * @return string
	 **/
	function getPurchaseTimeFrame()
	{
		return $this->PurchaseTimeFrame;
	}

	/**
	 * @return void
	 **/
	function setPurchaseTimeFrame($value)
	{
		$this->PurchaseTimeFrame = $value;
	}

	/**
	 * @return string
	 **/
	function getTradeInYear()
	{
		return $this->TradeInYear;
	}

	/**
	 * @return void
	 **/
	function setTradeInYear($value)
	{
		$this->TradeInYear = $value;
	}

	/**
	 * @return string
	 **/
	function getTradeInMake()
	{
		return $this->TradeInMake;
	}

	/**
	 * @return void
	 **/
	function setTradeInMake($value)
	{
		$this->TradeInMake = $value;
	}

	/**
	 * @return string
	 **/
	function getTradeInModel()
	{
		return $this->TradeInModel;
	}

	/**
	 * @return void
	 **/
	function setTradeInModel($value)
	{
		$this->TradeInModel = $value;
	}

	/**
	 * @return boolean
	 **/
	function getFinancingAnswer()
	{
		return $this->FinancingAnswer;
	}

	/**
	 * @return void
	 **/
	function setFinancingAnswer($value)
	{
		$this->FinancingAnswer = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAnswer1()
	{
		return $this->Answer1;
	}

	/**
	 * @return void
	 **/
	function setAnswer1($value)
	{
		$this->Answer1 = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAnswer2()
	{
		return $this->Answer2;
	}

	/**
	 * @return void
	 **/
	function setAnswer2($value)
	{
		$this->Answer2 = $value;
	}

}
?>
