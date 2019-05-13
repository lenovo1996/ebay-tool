<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class RefundFeeType extends EbatNsReturnManagement_FacetType
{
	const CodeType_PURCHASE_PRICE = 'PURCHASE_PRICE';
	const CodeType_ORIGINAL_SHIPPING = 'ORIGINAL_SHIPPING';
	const CodeType_RESTOCKING_FEE = 'RESTOCKING_FEE';
	const CodeType_OTHER = 'OTHER';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RefundFeeType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_RefundFeeType = new RefundFeeType();
?>