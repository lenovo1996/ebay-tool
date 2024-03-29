<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AttributeSetArrayType.php';

/**
  *       This type is deprecated.
  * 
 **/

class SIFFTASRecommendationsType extends EbatNs_ComplexType
{
	/**
	* @var AttributeSetArrayType
	**/
	public $AttributeSetArray;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SIFFTASRecommendationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AttributeSetArray' =>
				array(
					'required' => false,
					'type' => 'AttributeSetArrayType',
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
	 * @return AttributeSetArrayType
	 **/
	function getAttributeSetArray()
	{
		return $this->AttributeSetArray;
	}

	/**
	 * @return void
	 **/
	function setAttributeSetArray($value)
	{
		$this->AttributeSetArray = $value;
	}

}
?>
