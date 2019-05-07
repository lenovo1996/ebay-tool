<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Defines year, month, and day as individual components of a date.
  * Only applicable to use cases that support incomplete dates.
  * Otherwise, we use xs:dateTime (or xs:date, as appropriate).
  * 
 **/

class DateType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	public $Year;

	/**
	* @var int
	**/
	public $Month;

	/**
	* @var int
	**/
	public $Day;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DateType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Year' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Month' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Day' =>
				array(
					'required' => false,
					'type' => 'int',
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
	function getYear()
	{
		return $this->Year;
	}

	/**
	 * @return void
	 **/
	function setYear($value)
	{
		$this->Year = $value;
	}

	/**
	 * @return int
	 **/
	function getMonth()
	{
		return $this->Month;
	}

	/**
	 * @return void
	 **/
	function setMonth($value)
	{
		$this->Month = $value;
	}

	/**
	 * @return int
	 **/
	function getDay()
	{
		return $this->Day;
	}

	/**
	 * @return void
	 **/
	function setDay($value)
	{
		$this->Day = $value;
	}

}
?>
