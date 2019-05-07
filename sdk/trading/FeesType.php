<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'FeeType.php';

/**
  * Type used to express all fees associated with listing an item. These are the fees that the seller will pay to eBay.
  * 
 **/

class FeesType extends EbatNs_ComplexType
{
	/**
	* @var FeeType
	**/
	public $Fee;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('FeesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Fee' =>
				array(
					'required' => false,
					'type' => 'FeeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return FeeType
	 * @param integer $index 
	 **/
	function getFee($index = null)
	{
		if ($index !== null)
		{
			return $this->Fee[$index];
		}
		else
		{
			return $this->Fee;
		}
	}

	/**
	 * @return void
	 * @param FeeType $value
	 * @param integer $index 
	 **/
	function setFee($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Fee[$index] = $value;
		}
		else
		{
			$this->Fee= $value;
		}
	}

	/**
	 * @return void
	 * @param FeeType $value
	 **/
	function addFee($value)
	{
		$this->Fee[] = $value;
	}

}
?>
