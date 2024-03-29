<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class FeaturedPlusCodeType extends EbatNs_FacetType
{
	const CodeType_Enabled = 'Enabled';
	const CodeType_Disabled = 'Disabled';
	const CodeType_PowerSellerOnly = 'PowerSellerOnly';
	const CodeType_TopRatedSellerOnly = 'TopRatedSellerOnly';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FeaturedPlusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FeaturedPlusCodeType = new FeaturedPlusCodeType();
?>