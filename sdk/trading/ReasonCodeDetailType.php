<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * A container for VeRO reason code details.
  * 
 **/

class ReasonCodeDetailType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	public $BriefText;

	/**
	* @var string
	**/
	public $DetailedText;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReasonCodeDetailType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BriefText' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DetailedText' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'codeID' =>
			array(
				'name' => ' codeID',
				'type' => 'long',
				'use' => 'optional'
			)));
	}

	/**
	 * @return string
	 **/
	function getBriefText()
	{
		return $this->BriefText;
	}

	/**
	 * @return void
	 **/
	function setBriefText($value)
	{
		$this->BriefText = $value;
	}

	/**
	 * @return string
	 **/
	function getDetailedText()
	{
		return $this->DetailedText;
	}

	/**
	 * @return void
	 **/
	function setDetailedText($value)
	{
		$this->DetailedText = $value;
	}


}
?>
