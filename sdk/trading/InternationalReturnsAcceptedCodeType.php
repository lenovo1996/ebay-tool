<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ReturnsAcceptedCodeType.php';

/**
  * This type defines the available options the seller has for accepting international returns.
  * 
 **/

class InternationalReturnsAcceptedCodeType extends EbatNs_ComplexType
{
	/**
	* @var ReturnsAcceptedCodeType
	**/
	protected $InternationalReturnsAccepted;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('InternationalReturnsAcceptedCodeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'InternationalReturnsAccepted' =>
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
	function getInternationalReturnsAccepted($index = null)
	{
		if ($index !== null)
		{
			return $this->InternationalReturnsAccepted[$index];
		}
		else
		{
			return $this->InternationalReturnsAccepted;
		}
	}

	/**
	 * @return void
	 * @param ReturnsAcceptedCodeType $value
	 * @param integer $index 
	 **/
	function setInternationalReturnsAccepted($value, $index = null)
	{
		if ($index !== null)
		{
			$this->InternationalReturnsAccepted[$index] = $value;
		}
		else
		{
			$this->InternationalReturnsAccepted= $value;
		}
	}

	/**
	 * @return void
	 * @param ReturnsAcceptedCodeType $value
	 **/
	function addInternationalReturnsAccepted($value)
	{
		$this->InternationalReturnsAccepted[] = $value;
	}

}
?>
