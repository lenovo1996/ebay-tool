<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is deprecated, as the maximum number of policy violations for a buyer is no longer a valid Buyer Requirement at the account or listing level.
  * 
  * 
 **/

class NumberOfPolicyViolationsDetailsType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $Count;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NumberOfPolicyViolationsDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Count' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return int
	 * @param integer $index 
	 **/
	function getCount($index = null)
	{
		if ($index !== null)
		{
			return $this->Count[$index];
		}
		else
		{
			return $this->Count;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 * @param integer $index 
	 **/
	function setCount($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Count[$index] = $value;
		}
		else
		{
			$this->Count= $value;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 **/
	function addCount($value)
	{
		$this->Count[] = $value;
	}

}
?>
