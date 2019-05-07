<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
  * Contains summary information about the items the seller is selling.
  * 
 **/

class MyeBaySellingSummaryType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	public $ActiveAuctionCount;

	/**
	* @var int
	**/
	public $AuctionSellingCount;

	/**
	* @var int
	**/
	public $AuctionBidCount;

	/**
	* @var AmountType
	**/
	public $TotalAuctionSellingValue;

	/**
	* @var int
	**/
	public $TotalSoldCount;

	/**
	* @var AmountType
	**/
	public $TotalSoldValue;

	/**
	* @var int
	**/
	public $SoldDurationInDays;

	/**
	* @var int
	**/
	public $ClassifiedAdCount;

	/**
	* @var int
	**/
	public $TotalLeadCount;

	/**
	* @var int
	**/
	public $ClassifiedAdOfferCount;

	/**
	* @var int
	**/
	public $TotalListingsWithLeads;

	/**
	* @var long
	**/
	public $QuantityLimitRemaining;

	/**
	* @var AmountType
	**/
	public $AmountLimitRemaining;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MyeBaySellingSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ActiveAuctionCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AuctionSellingCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AuctionBidCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalAuctionSellingValue' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalSoldCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalSoldValue' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SoldDurationInDays' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalLeadCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdOfferCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalListingsWithLeads' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityLimitRemaining' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AmountLimitRemaining' =>
				array(
					'required' => false,
					'type' => 'AmountType',
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
	 * @return int
	 **/
	function getActiveAuctionCount()
	{
		return $this->ActiveAuctionCount;
	}

	/**
	 * @return void
	 **/
	function setActiveAuctionCount($value)
	{
		$this->ActiveAuctionCount = $value;
	}

	/**
	 * @return int
	 **/
	function getAuctionSellingCount()
	{
		return $this->AuctionSellingCount;
	}

	/**
	 * @return void
	 **/
	function setAuctionSellingCount($value)
	{
		$this->AuctionSellingCount = $value;
	}

	/**
	 * @return int
	 **/
	function getAuctionBidCount()
	{
		return $this->AuctionBidCount;
	}

	/**
	 * @return void
	 **/
	function setAuctionBidCount($value)
	{
		$this->AuctionBidCount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalAuctionSellingValue()
	{
		return $this->TotalAuctionSellingValue;
	}

	/**
	 * @return void
	 **/
	function setTotalAuctionSellingValue($value)
	{
		$this->TotalAuctionSellingValue = $value;
	}

	/**
	 * @return int
	 **/
	function getTotalSoldCount()
	{
		return $this->TotalSoldCount;
	}

	/**
	 * @return void
	 **/
	function setTotalSoldCount($value)
	{
		$this->TotalSoldCount = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getTotalSoldValue()
	{
		return $this->TotalSoldValue;
	}

	/**
	 * @return void
	 **/
	function setTotalSoldValue($value)
	{
		$this->TotalSoldValue = $value;
	}

	/**
	 * @return int
	 **/
	function getSoldDurationInDays()
	{
		return $this->SoldDurationInDays;
	}

	/**
	 * @return void
	 **/
	function setSoldDurationInDays($value)
	{
		$this->SoldDurationInDays = $value;
	}

	/**
	 * @return int
	 **/
	function getClassifiedAdCount()
	{
		return $this->ClassifiedAdCount;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdCount($value)
	{
		$this->ClassifiedAdCount = $value;
	}

	/**
	 * @return int
	 **/
	function getTotalLeadCount()
	{
		return $this->TotalLeadCount;
	}

	/**
	 * @return void
	 **/
	function setTotalLeadCount($value)
	{
		$this->TotalLeadCount = $value;
	}

	/**
	 * @return int
	 **/
	function getClassifiedAdOfferCount()
	{
		return $this->ClassifiedAdOfferCount;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdOfferCount($value)
	{
		$this->ClassifiedAdOfferCount = $value;
	}

	/**
	 * @return int
	 **/
	function getTotalListingsWithLeads()
	{
		return $this->TotalListingsWithLeads;
	}

	/**
	 * @return void
	 **/
	function setTotalListingsWithLeads($value)
	{
		$this->TotalListingsWithLeads = $value;
	}

	/**
	 * @return long
	 **/
	function getQuantityLimitRemaining()
	{
		return $this->QuantityLimitRemaining;
	}

	/**
	 * @return void
	 **/
	function setQuantityLimitRemaining($value)
	{
		$this->QuantityLimitRemaining = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getAmountLimitRemaining()
	{
		return $this->AmountLimitRemaining;
	}

	/**
	 * @return void
	 **/
	function setAmountLimitRemaining($value)
	{
		$this->AmountLimitRemaining = $value;
	}

}
?>
