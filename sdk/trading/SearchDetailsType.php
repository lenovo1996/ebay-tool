<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is deprecated.
  * 
 **/

class SearchDetailsType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	public $BuyItNowEnabled;

	/**
	* @var boolean
	**/
	public $Picture;

	/**
	* @var boolean
	**/
	public $RecentListing;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SearchDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BuyItNowEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Picture' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RecentListing' =>
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
	 * @return boolean
	 **/
	function getBuyItNowEnabled()
	{
		return $this->BuyItNowEnabled;
	}

	/**
	 * @return void
	 **/
	function setBuyItNowEnabled($value)
	{
		$this->BuyItNowEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPicture()
	{
		return $this->Picture;
	}

	/**
	 * @return void
	 **/
	function setPicture($value)
	{
		$this->Picture = $value;
	}

	/**
	 * @return boolean
	 **/
	function getRecentListing()
	{
		return $this->RecentListing;
	}

	/**
	 * @return void
	 **/
	function setRecentListing($value)
	{
		$this->RecentListing = $value;
	}

}
?>
