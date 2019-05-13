<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class ShipmentStatusType extends EbatNsReturnManagement_FacetType
{
	const CodeType_WAITING_FOR_SELLER_INFO = 'WAITING_FOR_SELLER_INFO';
	const CodeType_READY_FOR_SHIPPING = 'READY_FOR_SHIPPING';
	const CodeType_ITEM_SHIPPED = 'ITEM_SHIPPED';
	const CodeType_ITEM_DELIVERED = 'ITEM_DELIVERED';
	const CodeType_OTHER = 'OTHER';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ShipmentStatusType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_ShipmentStatusType = new ShipmentStatusType();
?>