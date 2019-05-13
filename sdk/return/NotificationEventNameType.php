<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class NotificationEventNameType extends EbatNsReturnManagement_FacetType
{
	const CodeType_ReturnCreated = 'ReturnCreated';
	const CodeType_ReturnWaitingForSellerInfo = 'ReturnWaitingForSellerInfo';
	const CodeType_ReturnSellerInfoOverdue = 'ReturnSellerInfoOverdue';
	const CodeType_ReturnShipped = 'ReturnShipped';
	const CodeType_ReturnDelivered = 'ReturnDelivered';
	const CodeType_ReturnRefundOverdue = 'ReturnRefundOverdue';
	const CodeType_ReturnClosed = 'ReturnClosed';
	const CodeType_ReturnEscalated = 'ReturnEscalated';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('NotificationEventNameType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_NotificationEventNameType = new NotificationEventNameType();
?>