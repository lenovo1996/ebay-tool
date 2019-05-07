<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is used by the <b>ItemSpecificDetails</b> container that is returned in the <b>GeteBayDetails</b> call. The <b>ItemSpecificDetails</b> container consist of maximum threshold values that must be adhered to when creating, revising, or relisting items with Item Specifics. Item Specifics are used to provide descriptive details of an item in a structured manner.
  * 
 **/

class ItemSpecificDetailsType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	public $MaxItemSpecificsPerItem;

	/**
	* @var int
	**/
	public $MaxValuesPerName;

	/**
	* @var int
	**/
	public $MaxCharactersPerValue;

	/**
	* @var int
	**/
	public $MaxCharactersPerName;

	/**
	* @var string
	**/
	public $DetailVersion;

	/**
	* @var dateTime
	**/
	public $UpdateTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemSpecificDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MaxItemSpecificsPerItem' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxValuesPerName' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxCharactersPerValue' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxCharactersPerName' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DetailVersion' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UpdateTime' =>
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
	 * @return int
	 **/
	function getMaxItemSpecificsPerItem()
	{
		return $this->MaxItemSpecificsPerItem;
	}

	/**
	 * @return void
	 **/
	function setMaxItemSpecificsPerItem($value)
	{
		$this->MaxItemSpecificsPerItem = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxValuesPerName()
	{
		return $this->MaxValuesPerName;
	}

	/**
	 * @return void
	 **/
	function setMaxValuesPerName($value)
	{
		$this->MaxValuesPerName = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxCharactersPerValue()
	{
		return $this->MaxCharactersPerValue;
	}

	/**
	 * @return void
	 **/
	function setMaxCharactersPerValue($value)
	{
		$this->MaxCharactersPerValue = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxCharactersPerName()
	{
		return $this->MaxCharactersPerName;
	}

	/**
	 * @return void
	 **/
	function setMaxCharactersPerName($value)
	{
		$this->MaxCharactersPerName = $value;
	}

	/**
	 * @return string
	 **/
	function getDetailVersion()
	{
		return $this->DetailVersion;
	}

	/**
	 * @return void
	 **/
	function setDetailVersion($value)
	{
		$this->DetailVersion = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}

	/**
	 * @return void
	 **/
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
	}

}
?>
