<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';

/**
  * Type defining the <b>dateRangeFilter</b> container in the <b>getUserReturns</b> 
  * request. This container is used to restrict results to returns created within a specified
  * date range.
  * 
 **/

class DateRangeFilterType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var dateTime
	**/
	public $fromDate;

	/**
	* @var dateTime
	**/
	public $toDate;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DateRangeFilterType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'fromDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'toDate' =>
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
	 * @return dateTime
	 **/
	function getfromDate()
	{
		return $this->fromDate;
	}

	/**
	 * @return void
	 **/
	function setfromDate($value)
	{
		$this->fromDate = $value;
	}

	/**
	 * @return dateTime
	 **/
	function gettoDate()
	{
		return $this->toDate;
	}

	/**
	 * @return void
	 **/
	function settoDate($value)
	{
		$this->toDate = $value;
	}

}
?>
