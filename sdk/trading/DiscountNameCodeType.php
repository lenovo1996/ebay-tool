<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DiscountNameCodeType extends EbatNs_FacetType
{
	const CodeType_EachAdditionalAmount = 'EachAdditionalAmount';
	const CodeType_EachAdditionalAmountOff = 'EachAdditionalAmountOff';
	const CodeType_EachAdditionalPercentOff = 'EachAdditionalPercentOff';
	const CodeType_IndividualItemWeight = 'IndividualItemWeight';
	const CodeType_CombinedItemWeight = 'CombinedItemWeight';
	const CodeType_WeightOff = 'WeightOff';
	const CodeType_ShippingCostXForAmountY = 'ShippingCostXForAmountY';
	const CodeType_ShippingCostXForItemCountN = 'ShippingCostXForItemCountN';
	const CodeType_MaximumShippingCostPerOrder = 'MaximumShippingCostPerOrder';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DiscountNameCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DiscountNameCodeType = new DiscountNameCodeType();
?>