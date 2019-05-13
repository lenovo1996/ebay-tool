<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class ReturnType extends EbatNsReturnManagement_FacetType
{
	const CodeType_MONEY_BACK = 'MONEY_BACK';
	const CodeType_REPLACEMENT = 'REPLACEMENT';
	const CodeType_UNKNOWN = 'UNKNOWN';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReturnType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_ReturnType = new ReturnType();
?>