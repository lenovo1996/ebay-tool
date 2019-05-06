<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ReturnsDurationCodeType.php';

/**
  * This type defines the available options for the return durations for international returns.
  * 
 **/

class InternationalReturnsDurationCodeType extends EbatNs_ComplexType
{
	/**
	* @var ReturnsDurationCodeType
	**/
	protected $InternationalReturnsDuration;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('InternationalReturnsDurationCodeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'InternationalReturnsDuration' =>
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
	function getInternationalReturnsDuration($index = null)
	{
		if ($index !== null)
		{
			return $this->InternationalReturnsDuration[$index];
		}
		else
		{
			return $this->InternationalReturnsDuration;
		}
	}

	/**
	 * @return void
	 * @param ReturnsDurationCodeType $value
	 * @param integer $index 
	 **/
	function setInternationalReturnsDuration($value, $index = null)
	{
		if ($index !== null)
		{
			$this->InternationalReturnsDuration[$index] = $value;
		}
		else
		{
			$this->InternationalReturnsDuration= $value;
		}
	}

	/**
	 * @return void
	 * @param ReturnsDurationCodeType $value
	 **/
	function addInternationalReturnsDuration($value)
	{
		$this->InternationalReturnsDuration[] = $value;
	}

}
?>
