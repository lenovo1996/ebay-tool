<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class InsuranceSelectedCodeType extends EbatNs_FacetType
{
	const CodeType_NotOffered = 'NotOffered';
	const CodeType_OfferedNotSelected = 'OfferedNotSelected';
	const CodeType_OfferedSelected = 'OfferedSelected';
	const CodeType_Required = 'Required';
	const CodeType_IncludedInShippingHandling = 'IncludedInShippingHandling';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('InsuranceSelectedCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_InsuranceSelectedCodeType = new InsuranceSelectedCodeType();
?>