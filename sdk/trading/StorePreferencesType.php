<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'StoreVacationPreferencesType.php';

/**
  * Store Preferences type.
  * 
 **/

class StorePreferencesType extends EbatNs_ComplexType
{
	/**
	* @var StoreVacationPreferencesType
	**/
	public $VacationPreferences;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StorePreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'VacationPreferences' =>
				array(
					'required' => false,
					'type' => 'StoreVacationPreferencesType',
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
	 * @return StoreVacationPreferencesType
	 **/
	function getVacationPreferences()
	{
		return $this->VacationPreferences;
	}

	/**
	 * @return void
	 **/
	function setVacationPreferences($value)
	{
		$this->VacationPreferences = $value;
	}

}
?>
