<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class TrackingStatusType extends EbatNsReturnManagement_FacetType
{
	const CodeType_DELIEVERED = 'DELIEVERED';
	const CodeType_IN_TRANSIT = 'IN_TRANSIT';
	const CodeType_UNKNOWN = 'UNKNOWN';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('TrackingStatusType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_TrackingStatusType = new TrackingStatusType();
?>