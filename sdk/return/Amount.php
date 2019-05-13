<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';

/**
  * Monetary amount. This type is used in several locations in the <b>getUserReturns</b>, 
  * <b>getReturnDetails</b>, and <b>issueRefund</b> responses.
  * 
  * This attribute identifies the currency in which the monetary amount is
  * specified.
  * 
 **/

class Amount extends EbatNsReturnManagement_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('Amount', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'currencyId' =>
			array(
				'name' => ' currencyId',
				'type' => 'string',
				'use' => 'required'
			)));
	}



}
?>
