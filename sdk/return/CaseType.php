<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class CaseType extends EbatNsReturnManagement_FacetType
{
	const CodeType_EBP_SNAD = 'EBP_SNAD';
	const CodeType_OTHER = 'OTHER';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CaseType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_CaseType = new CaseType();
?>