<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ReturnsDurationCodeType.php';

/**
  * This type defines the available options for the return durations for domestic returns.
  * 
 **/

class DomesticReturnsDurationCodeType extends EbatNs_ComplexType
{
	/**
	* @var ReturnsDurationCodeType
	**/
	protected $DomesticReturnsDuration;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DomesticReturnsDurationCodeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DomesticReturnsDuration' =>
				array(
					'required' => false,
					'type' => 'ReturnsDurationCodeType',
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
	 * @return ReturnsDurationCodeType
	 * @param integer $index 
	 **/
	function getDomesticReturnsDuration($index = null)
	{
		if ($index !== null)
		{
			return $this->DomesticReturnsDuration[$index];
		}
		else
		{
			return $this->DomesticReturnsDuration;
		}
	}

	/**
	 * @return void
	 * @param ReturnsDurationCodeType $value
	 * @param integer $index 
	 **/
	function setDomesticReturnsDuration($value, $index = null)
	{
		if ($index !== null)
		{
			$this->DomesticReturnsDuration[$index] = $value;
		}
		else
		{
			$this->DomesticReturnsDuration= $value;
		}
	}

	/**
	 * @return void
	 * @param ReturnsDurationCodeType $value
	 **/
	function addDomesticReturnsDuration($value)
	{
		$this->DomesticReturnsDuration[] = $value;
	}

}
?>
