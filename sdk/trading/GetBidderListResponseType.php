<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'UserType.php';
require_once 'ItemArrayType.php';

/**
  * Response to a <b>GetBidderList</b> call, which retrieves all items the
  * user is currently bidding on, or has won or purchased.
  * 
 **/

class GetBidderListResponseType extends AbstractResponseType
{
	/**
	* @var UserType
	**/
	public $Bidder;

	/**
	* @var ItemArrayType
	**/
	public $BidItemArray;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetBidderListResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Bidder' =>
				array(
					'required' => false,
					'type' => 'UserType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidItemArray' =>
				array(
					'required' => false,
					'type' => 'ItemArrayType',
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
	 * @return UserType
	 **/
	function getBidder()
	{
		return $this->Bidder;
	}

	/**
	 * @return void
	 **/
	function setBidder($value)
	{
		$this->Bidder = $value;
	}

	/**
	 * @return ItemArrayType
	 **/
	function getBidItemArray()
	{
		return $this->BidItemArray;
	}

	/**
	 * @return void
	 **/
	function setBidItemArray($value)
	{
		$this->BidItemArray = $value;
	}

}
?>
