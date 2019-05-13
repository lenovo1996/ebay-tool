<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'ReturnUserType.php';

/**
  * Type defining the <b>responseDue</b> container returned in the requests of 
  * the <b>getUserReturns</b> and <b>getReturnDetail</b> calls. The 
  * <b>responseDue</b> container is only returned if a response is due from 
  * the seller or other party involved in the return.
  * 
 **/

class ReturnResponseDueType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var ReturnUserType
	**/
	public $party;

	/**
	* @var dateTime
	**/
	public $respondByDate;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnResponseDueType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'party' =>
				array(
					'required' => false,
					'type' => 'ReturnUserType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'respondByDate' =>
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
	 * @return ReturnUserType
	 **/
	function getparty()
	{
		return $this->party;
	}

	/**
	 * @return void
	 **/
	function setparty($value)
	{
		$this->party = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getrespondByDate()
	{
		return $this->respondByDate;
	}

	/**
	 * @return void
	 **/
	function setrespondByDate($value)
	{
		$this->respondByDate = $value;
	}

}
?>
