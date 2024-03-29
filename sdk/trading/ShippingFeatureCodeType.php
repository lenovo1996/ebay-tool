<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ShippingFeatureCodeType extends EbatNs_FacetType
{
	const CodeType_DeliveryConfirmation = 'DeliveryConfirmation';
	const CodeType_SignatureConfirmation = 'SignatureConfirmation';
	const CodeType_StealthPostage = 'StealthPostage';
	const CodeType_SaturdayDelivery = 'SaturdayDelivery';
	const CodeType_Other = 'Other';
	const CodeType_NotDefined = 'NotDefined';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ShippingFeatureCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ShippingFeatureCodeType = new ShippingFeatureCodeType();
?>