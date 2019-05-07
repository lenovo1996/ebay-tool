<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is used to specify the additional listing durations that are available to sellers who have eBay Store subscriptions. The <b>StoreOwnerExtendedListingDurations</b> container is only returned under the <b>SiteDefaults</b> node if the eBay marketplace supports additional listing durations for eBay Store owners, and this container is only returned under a <b>Category</b> node if this eBay category supports additional listing durations for eBay Store owners (other than the durations that are already supported for the category).
  * 
 **/

class StoreOwnerExtendedListingDurationsType extends EbatNs_ComplexType
{
	/**
	* @var token
	**/
	public $Duration;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreOwnerExtendedListingDurationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Duration' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return token
	 * @param integer $index 
	 **/
	function getDuration($index = null)
	{
		if ($index !== null)
		{
			return $this->Duration[$index];
		}
		else
		{
			return $this->Duration;
		}
	}

	/**
	 * @return void
	 * @param token $value
	 * @param integer $index 
	 **/
	function setDuration($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Duration[$index] = $value;
		}
		else
		{
			$this->Duration= $value;
		}
	}

	/**
	 * @return void
	 * @param token $value
	 **/
	function addDuration($value)
	{
		$this->Duration[] = $value;
	}

}
?>
