<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class StoreCustomHeaderLayoutCodeType extends EbatNs_FacetType
{
	const CodeType_NoHeader = 'NoHeader';
	const CodeType_CustomHeaderShown = 'CustomHeaderShown';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StoreCustomHeaderLayoutCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StoreCustomHeaderLayoutCodeType = new StoreCustomHeaderLayoutCodeType();
?>