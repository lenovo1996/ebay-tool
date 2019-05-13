<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';

/**
  * Parent type for the <b>ProvideSellerInfoOptionType</b> and <b>IssueRefundOptionType</b> 
  * types returned in the <b>getActivityOptions</b> response.
  * 
 **/

class BaseActivityOptionType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var boolean
	**/
	public $buyerPreference;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BaseActivityOptionType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'buyerPreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	 * @return boolean
	 **/
	function getbuyerPreference()
	{
		return $this->buyerPreference;
	}

	/**
	 * @return void
	 **/
	function setbuyerPreference($value)
	{
		$this->buyerPreference = $value;
	}

}
?>
