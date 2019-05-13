<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';

/**
  * Contextual data associated with an error. 
  * 
  * The name of the input parameter returned with the error. Inspecting the parameter (or its input value) will often aid in understanding the cause of the error. Not all error messages contain this value.  
  * 
 **/

class ErrorParameter extends EbatNsReturnManagement_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ErrorParameter', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'name' =>
			array(
				'name' => ' name',
				'type' => 'string',
				'use' => 'optional'
			)));
	}



}
?>
