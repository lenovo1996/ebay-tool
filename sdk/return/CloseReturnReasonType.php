<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class CloseReturnReasonType extends EbatNsReturnManagement_FacetType
{
	const CodeType_CLOSED_UPON_REFUND = 'CLOSED_UPON_REFUND';
	const CodeType_EXPIRED = 'EXPIRED';
	const CodeType_CS_CLOSED = 'CS_CLOSED';
	const CodeType_CLOSED_UPON_ESCALATION = 'CLOSED_UPON_ESCALATION';
	const CodeType_OTHER = 'OTHER';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CloseReturnReasonType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_CloseReturnReasonType = new CloseReturnReasonType();
?>