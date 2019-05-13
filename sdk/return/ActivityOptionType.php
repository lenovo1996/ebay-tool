<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class ActivityOptionType extends EbatNsReturnManagement_FacetType
{
	const CodeType_ISSUE_REFUND = 'ISSUE_REFUND';
	const CodeType_PROVIDE_SELLER_INFO = 'PROVIDE_SELLER_INFO';
	const CodeType_SELLER_PRINT_SHIPPING_LABEL = 'SELLER_PRINT_SHIPPING_LABEL';
	const CodeType_SELLER_PROVIDE_TRACKING_INFO = 'SELLER_PROVIDE_TRACKING_INFO';
	const CodeType_SELLER_MARK_AS_RECEIVED = 'SELLER_MARK_AS_RECEIVED';
	const CodeType_OTHER = 'OTHER';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ActivityOptionType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_ActivityOptionType = new ActivityOptionType();
?>