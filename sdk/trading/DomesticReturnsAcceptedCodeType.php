<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ReturnsAcceptedCodeType.php';

/**
  * This type defines the available options the seller has for accepting domestic returns.
  * 
 **/

class DomesticReturnsAcceptedCodeType extends EbatNs_ComplexType
{
	/**
	* @var ReturnsAcceptedCodeType
	**/
	public $DomesticReturnsAccepted;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DomesticReturnsAcceptedCodeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DomesticReturnsAccepted' =>
				array(
					'required' => false,
					'type' => 'ReturnsAcceptedCodeType',
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
	 * @return ReturnsAcceptedCodeType
	 * @param integer $index 
	 **/
	function getDomesticReturnsAccepted($index = null)
	{
		if ($index !== null)
		{
			return $this->DomesticReturnsAccepted[$index];
		}
		else
		{
			return $this->DomesticReturnsAccepted;
		}
	}

	/**
	 * @return void
	 * @param ReturnsAcceptedCodeType $value
	 * @param integer $index 
	 **/
	function setDomesticReturnsAccepted($value, $index = null)
	{
		if ($index !== null)
		{
			$this->DomesticReturnsAccepted[$index] = $value;
		}
		else
		{
			$this->DomesticReturnsAccepted= $value;
		}
	}

	/**
	 * @return void
	 * @param ReturnsAcceptedCodeType $value
	 **/
	function addDomesticReturnsAccepted($value)
	{
		$this->DomesticReturnsAccepted[] = $value;
	}

}
?>
