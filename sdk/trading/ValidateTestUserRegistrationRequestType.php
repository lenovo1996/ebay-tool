<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Requests to enable a test user to sell items in the Sandbox environment.
  * 
 **/

class ValidateTestUserRegistrationRequestType extends AbstractRequestType
{
	/**
	* @var int
	**/
	public $FeedbackScore;

	/**
	* @var dateTime
	**/
	public $RegistrationDate;

	/**
	* @var boolean
	**/
	public $SubscribeSA;

	/**
	* @var boolean
	**/
	public $SubscribeSAPro;

	/**
	* @var boolean
	**/
	public $SubscribeSM;

	/**
	* @var boolean
	**/
	public $SubscribeSMPro;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ValidateTestUserRegistrationRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'FeedbackScore' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RegistrationDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SubscribeSA' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SubscribeSAPro' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SubscribeSM' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SubscribeSMPro' =>
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
	 * @return int
	 **/
	function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}

	/**
	 * @return void
	 **/
	function setFeedbackScore($value)
	{
		$this->FeedbackScore = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getRegistrationDate()
	{
		return $this->RegistrationDate;
	}

	/**
	 * @return void
	 **/
	function setRegistrationDate($value)
	{
		$this->RegistrationDate = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSubscribeSA()
	{
		return $this->SubscribeSA;
	}

	/**
	 * @return void
	 **/
	function setSubscribeSA($value)
	{
		$this->SubscribeSA = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSubscribeSAPro()
	{
		return $this->SubscribeSAPro;
	}

	/**
	 * @return void
	 **/
	function setSubscribeSAPro($value)
	{
		$this->SubscribeSAPro = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSubscribeSM()
	{
		return $this->SubscribeSM;
	}

	/**
	 * @return void
	 **/
	function setSubscribeSM($value)
	{
		$this->SubscribeSM = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSubscribeSMPro()
	{
		return $this->SubscribeSMPro;
	}

	/**
	 * @return void
	 **/
	function setSubscribeSMPro($value)
	{
		$this->SubscribeSMPro = $value;
	}

}
?>
