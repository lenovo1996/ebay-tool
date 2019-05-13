<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';

/**
  * Type defining the unique identifier for a return.
  * 
 **/

class ReturnIdType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var string
	**/
	public $id;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnIdType', 'http://www.ebay.com/marketplace/returns/v1/services');
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

}
?>
