<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type defines the <b>ProductDetails</b> container that is returned in the <b>GeteBayDetails</b> response if the <code>ProductDetails</code> value is used in a <b>DetailName</b> field (or no <b>DetailName</b> fields are used).
  * <br><br>
  * The <b>ProductDetails</b> container shows the substitute text that can be used in place of an actual product identifier (e.g. EAN, ISBNs, UPC, or MPN) in case the product does not have a product identifier and/or the product identifier is not known by the seller.
  * 
 **/

class ProductDetailsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	public $ProductIdentifierUnavailableText;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProductDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ProductIdentifierUnavailableText' =>
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
	function getProductIdentifierUnavailableText()
	{
		return $this->ProductIdentifierUnavailableText;
	}

	/**
	 * @return void
	 **/
	function setProductIdentifierUnavailableText($value)
	{
		$this->ProductIdentifierUnavailableText = $value;
	}

}
?>
