<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class ReturnStatusInputType extends EbatNsReturnManagement_FacetType
{
	const CodeType_RETURN_STARTED = 'RETURN_STARTED';
	const CodeType_CLOSED = 'CLOSED';
	const CodeType_ITEM_SHIPPED = 'ITEM_SHIPPED';
	const CodeType_MY_RESPONSE_DUE = 'MY_RESPONSE_DUE';
	const CodeType_OTHER_PARTY_RESPONSE_DUE = 'OTHER_PARTY_RESPONSE_DUE';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReturnStatusInputType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_ReturnStatusInputType = new ReturnStatusInputType();
?>