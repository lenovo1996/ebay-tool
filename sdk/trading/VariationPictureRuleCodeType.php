<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class VariationPictureRuleCodeType extends EbatNs_FacetType
{
	const CodeType_Required = 'Required';
	const CodeType_Enabled = 'Enabled';
	const CodeType_Disabled = 'Disabled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('VariationPictureRuleCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_VariationPictureRuleCodeType = new VariationPictureRuleCodeType();
?>