<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellingManagerInventoryPropertyTypeCodeType extends EbatNs_FacetType
{
	const CodeType_ProductsOutOfStock = 'ProductsOutOfStock';
	const CodeType_Active = 'Active';
	const CodeType_InActive = 'InActive';
	const CodeType_LowStock = 'LowStock';
	const CodeType_WithListings = 'WithListings';
	const CodeType_WithoutListings = 'WithoutListings';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerInventoryPropertyTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerInventoryPropertyTypeCodeType = new SellingManagerInventoryPropertyTypeCodeType();
?>