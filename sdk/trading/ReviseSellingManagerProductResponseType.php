<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'SellingManagerProductDetailsType.php';

/**
  * Response for revising a Selling Manager product.
  * 
 **/

class ReviseSellingManagerProductResponseType extends AbstractResponseType
{
	/**
	* @var SellingManagerProductDetailsType
	**/
	public $SellingManagerProductDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReviseSellingManagerProductResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SellingManagerProductDetails' =>
				array(
					'required' => false,
					'type' => 'SellingManagerProductDetailsType',
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
	 * @return SellingManagerProductDetailsType
	 **/
	function getSellingManagerProductDetails()
	{
		return $this->SellingManagerProductDetails;
	}

	/**
	 * @return void
	 **/
	function setSellingManagerProductDetails($value)
	{
		$this->SellingManagerProductDetails = $value;
	}

}
?>
