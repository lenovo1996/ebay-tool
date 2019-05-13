<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'CaseType.php';

/**
  * Type defining the <b>caseId</b> container, which consists of a case ID and
  * case type that uniquely identifies an eBay Buyer Protection case.
  * 
 **/

class CaseIdType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var string
	**/
	public $id;

	/**
	* @var CaseType
	**/
	public $type;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CaseIdType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'id' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'type' =>
				array(
					'required' => false,
					'type' => 'CaseType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return string
	 **/
	function getid()
	{
		return $this->id;
	}

	/**
	 * @return void
	 **/
	function setid($value)
	{
		$this->id = $value;
	}

	/**
	 * @return CaseType
	 **/
	function gettype()
	{
		return $this->type;
	}

	/**
	 * @return void
	 **/
	function settype($value)
	{
		$this->type = $value;
	}

}
?>
