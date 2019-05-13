<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class MetadataCodeType extends EbatNsReturnManagement_FacetType
{
	const CodeType_REFUND_DUE_UPON_ITEM_ARRIVAL = 'REFUND_DUE_UPON_ITEM_ARRIVAL';
	const CodeType_RMA_DUE_UPON_RETURN_START = 'RMA_DUE_UPON_RETURN_START';
	const CodeType_RETURN_REASONS = 'RETURN_REASONS';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MetadataCodeType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_MetadataCodeType = new MetadataCodeType();
?>