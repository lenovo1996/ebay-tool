<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class MerchandizingPrefCodeType extends EbatNs_FacetType
{
	const CodeType_OptIn = 'OptIn';
	const CodeType_OptOut = 'OptOut';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MerchandizingPrefCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MerchandizingPrefCodeType = new MerchandizingPrefCodeType();
?>