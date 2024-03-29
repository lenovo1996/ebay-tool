<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'PromotionalSaleStatusCodeType.php';

/**
  *          The base response of the <b>SetPromotionalSaleListings</b> call. Contains the status of a promotional sale.
  * 
 **/

class SetPromotionalSaleListingsResponseType extends AbstractResponseType
{
	/**
	* @var PromotionalSaleStatusCodeType
	**/
	public $Status;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetPromotionalSaleListingsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Status' =>
				array(
					'required' => false,
					'type' => 'PromotionalSaleStatusCodeType',
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
	 * @return PromotionalSaleStatusCodeType
	 **/
	function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @return void
	 **/
	function setStatus($value)
	{
		$this->Status = $value;
	}

}
?>
