<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'AccountHistorySelectionCodeType.php';
require_once 'PaginationType.php';
require_once 'AccountEntrySortTypeCodeType.php';
require_once 'CurrencyCodeType.php';
require_once 'ItemIDType.php';

/**
  * Returns a seller's invoice data for their eBay account, including the account's
  * summary data.
  * 
 **/

class GetAccountRequestType extends AbstractRequestType
{
	/**
	* @var AccountHistorySelectionCodeType
	**/
	public $AccountHistorySelection;

	/**
	* @var dateTime
	**/
	public $InvoiceDate;

	/**
	* @var dateTime
	**/
	public $BeginDate;

	/**
	* @var dateTime
	**/
	public $EndDate;

	/**
	* @var PaginationType
	**/
	public $Pagination;

	/**
	* @var boolean
	**/
	public $ExcludeBalance;

	/**
	* @var boolean
	**/
	public $ExcludeSummary;

	/**
	* @var boolean
	**/
	public $IncludeConversionRate;

	/**
	* @var AccountEntrySortTypeCodeType
	**/
	public $AccountEntrySortType;

	/**
	* @var CurrencyCodeType
	**/
	public $Currency;

	/**
	* @var ItemIDType
	**/
	public $ItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetAccountRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AccountHistorySelection' =>
				array(
					'required' => false,
					'type' => 'AccountHistorySelectionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InvoiceDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BeginDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Pagination' =>
				array(
					'required' => false,
					'type' => 'PaginationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExcludeBalance' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExcludeSummary' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeConversionRate' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AccountEntrySortType' =>
				array(
					'required' => false,
					'type' => 'AccountEntrySortTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Currency' =>
				array(
					'required' => false,
					'type' => 'CurrencyCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return AccountHistorySelectionCodeType
	 **/
	function getAccountHistorySelection()
	{
		return $this->AccountHistorySelection;
	}

	/**
	 * @return void
	 **/
	function setAccountHistorySelection($value)
	{
		$this->AccountHistorySelection = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getInvoiceDate()
	{
		return $this->InvoiceDate;
	}

	/**
	 * @return void
	 **/
	function setInvoiceDate($value)
	{
		$this->InvoiceDate = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getBeginDate()
	{
		return $this->BeginDate;
	}

	/**
	 * @return void
	 **/
	function setBeginDate($value)
	{
		$this->BeginDate = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEndDate()
	{
		return $this->EndDate;
	}

	/**
	 * @return void
	 **/
	function setEndDate($value)
	{
		$this->EndDate = $value;
	}

	/**
	 * @return PaginationType
	 **/
	function getPagination()
	{
		return $this->Pagination;
	}

	/**
	 * @return void
	 **/
	function setPagination($value)
	{
		$this->Pagination = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExcludeBalance()
	{
		return $this->ExcludeBalance;
	}

	/**
	 * @return void
	 **/
	function setExcludeBalance($value)
	{
		$this->ExcludeBalance = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExcludeSummary()
	{
		return $this->ExcludeSummary;
	}

	/**
	 * @return void
	 **/
	function setExcludeSummary($value)
	{
		$this->ExcludeSummary = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeConversionRate()
	{
		return $this->IncludeConversionRate;
	}

	/**
	 * @return void
	 **/
	function setIncludeConversionRate($value)
	{
		$this->IncludeConversionRate = $value;
	}

	/**
	 * @return AccountEntrySortTypeCodeType
	 **/
	function getAccountEntrySortType()
	{
		return $this->AccountEntrySortType;
	}

	/**
	 * @return void
	 **/
	function setAccountEntrySortType($value)
	{
		$this->AccountEntrySortType = $value;
	}

	/**
	 * @return CurrencyCodeType
	 **/
	function getCurrency()
	{
		return $this->Currency;
	}

	/**
	 * @return void
	 **/
	function setCurrency($value)
	{
		$this->Currency = $value;
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

}
?>
