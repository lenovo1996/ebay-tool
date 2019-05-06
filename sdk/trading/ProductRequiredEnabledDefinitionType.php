<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>ProductRequiredEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> response (as long as <b>ProductRequiredEnabled</b> is included as a <a href="types/FeatureIDCodeType.html">FeatureID</a> value in the call request or no <b>FeatureID</b> values are passed into the call request). The <b>ProductRequiredEnabled</b> field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Product-Based Shopping Experience.
  * <br>
  * <br>
  * <span class="tablenote"><b>Note:</b>
  * Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, the <b>FeatureDefinitions.ProductRequiredEnabled</b> field no longer has any practical use. Due to this fact, the <b>ProductRequiredEnabledDefinitionType</b> is currently not applicable.
  * </span>
  * 
 **/

class ProductRequiredEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProductRequiredEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

}
?>
