<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class AspectUsageCodeType extends EbatNs_FacetType
{
	const CodeType_Product = 'Product';
	const CodeType_Instance = 'Instance';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AspectUsageCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AspectUsageCodeType = new AspectUsageCodeType();
?>