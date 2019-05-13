<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseRequest.php';
require_once 'ItemFilterType.php';
require_once 'DateRangeFilterType.php';
require_once 'ReturnStatusFilterType.php';
require_once 'UserFilterType.php';
require_once 'PaginationInput.php';
require_once 'ReturnSortType.php';
require_once 'ReturnSortOrderType.php';

/**
  * Type defining the <b>getUserReturns</b> request. This call is used by a
  * seller or buyer to retrieve returns in which the eBay member is involved. This
  * call can retrieve all returns, or filtering criteria can be used.
  * 
 **/

class getUserReturnsRequest extends BaseRequest
{
	/**
	* @var ItemFilterType
	**/
	public $itemFilter;

	/**
	* @var string
	**/
	public $orderId;

	/**
	* @var DateRangeFilterType
	**/
	public $creationDateRangeFilter;

	/**
	* @var ReturnStatusFilterType
	**/
	public $ReturnStatusFilter;

	/**
	* @var UserFilterType
	**/
	public $otherUserFilter;

	/**
	* @var PaginationInput
	**/
	public $paginationInput;

	/**
	* @var ReturnSortType
	**/
	public $sortType;

	/**
	* @var ReturnSortOrderType
	**/
	public $sortOrderType;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('getUserReturnsRequest', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'itemFilter' =>
				array(
					'required' => false,
					'type' => 'ItemFilterType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'orderId' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'creationDateRangeFilter' =>
				array(
					'required' => false,
					'type' => 'DateRangeFilterType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnStatusFilter' =>
				array(
					'required' => false,
					'type' => 'ReturnStatusFilterType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'otherUserFilter' =>
				array(
					'required' => false,
					'type' => 'UserFilterType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'paginationInput' =>
				array(
					'required' => false,
					'type' => 'PaginationInput',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'sortType' =>
				array(
					'required' => false,
					'type' => 'ReturnSortType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'sortOrderType' =>
				array(
					'required' => false,
					'type' => 'ReturnSortOrderType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ItemFilterType
	 **/
	function getitemFilter()
	{
		return $this->itemFilter;
	}

	/**
	 * @return void
	 **/
	function setitemFilter($value)
	{
		$this->itemFilter = $value;
	}

	/**
	 * @return string
	 **/
	function getorderId()
	{
		return $this->orderId;
	}

	/**
	 * @return void
	 **/
	function setorderId($value)
	{
		$this->orderId = $value;
	}

	/**
	 * @return DateRangeFilterType
	 **/
	function getcreationDateRangeFilter()
	{
		return $this->creationDateRangeFilter;
	}

	/**
	 * @return void
	 **/
	function setcreationDateRangeFilter($value)
	{
		$this->creationDateRangeFilter = $value;
	}

	/**
	 * @return ReturnStatusFilterType
	 **/
	function getReturnStatusFilter()
	{
		return $this->ReturnStatusFilter;
	}

	/**
	 * @return void
	 **/
	function setReturnStatusFilter($value)
	{
		$this->ReturnStatusFilter = $value;
	}

	/**
	 * @return UserFilterType
	 **/
	function getotherUserFilter()
	{
		return $this->otherUserFilter;
	}

	/**
	 * @return void
	 **/
	function setotherUserFilter($value)
	{
		$this->otherUserFilter = $value;
	}

	/**
	 * @return PaginationInput
	 **/
	function getpaginationInput()
	{
		return $this->paginationInput;
	}

	/**
	 * @return void
	 **/
	function setpaginationInput($value)
	{
		$this->paginationInput = $value;
	}

	/**
	 * @return ReturnSortType
	 **/
	function getsortType()
	{
		return $this->sortType;
	}

	/**
	 * @return void
	 **/
	function setsortType($value)
	{
		$this->sortType = $value;
	}

	/**
	 * @return ReturnSortOrderType
	 **/
	function getsortOrderType()
	{
		return $this->sortOrderType;
	}

	/**
	 * @return void
	 **/
	function setsortOrderType($value)
	{
		$this->sortOrderType = $value;
	}

}
?>
