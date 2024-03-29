<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DisputeFilterTypeCodeType extends EbatNs_FacetType
{
	const CodeType_AllInvolvedDisputes = 'AllInvolvedDisputes';
	const CodeType_DisputesAwaitingMyResponse = 'DisputesAwaitingMyResponse';
	const CodeType_DisputesAwaitingOtherPartyResponse = 'DisputesAwaitingOtherPartyResponse';
	const CodeType_AllInvolvedClosedDisputes = 'AllInvolvedClosedDisputes';
	const CodeType_EligibleForCredit = 'EligibleForCredit';
	const CodeType_UnpaidItemDisputes = 'UnpaidItemDisputes';
	const CodeType_ItemNotReceivedDisputes = 'ItemNotReceivedDisputes';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisputeFilterTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisputeFilterTypeCodeType = new DisputeFilterTypeCodeType();
?>