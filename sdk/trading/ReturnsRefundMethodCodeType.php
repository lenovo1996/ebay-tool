<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ReturnsRefundMethodCodeType extends EbatNs_FacetType
{
	const CodeType_MoneyBack = 'MoneyBack';
	const CodeType_MoneyBackorReplacement = 'MoneyBackorReplacement';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReturnsRefundMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ReturnsRefundMethodCodeType = new ReturnsRefundMethodCodeType();
?>