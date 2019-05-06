<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  *         Base64 is a binary-to-text encoding scheme that represents binary data in an ASCII string format by translating it into a radix-64 representation. The term "Base64" originates from a specific MIME content transfer encoding.
  *         <br/><br/>
  *         <span class="tablenote">
  *         <strong>Note:</strong> This type contains the name or reference ID of the binary attachment, not the attachment data.
  *         </span>
  *       
  *               This optional attribute allows the binary attachment to be named.
  *             
 **/

class Base64BinaryType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('Base64BinaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'contentType' =>
			array(
				'name' => ' contentType',
				'type' => 'string',
				'use' => 'optional'
			)));
	}



}
?>
