<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class StatusType extends EbatNsReturnManagement_FacetType
{
	const CodeType_SUCCESS = 'SUCCESS';
	const CodeType_FAILED = 'FAILED';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StatusType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_StatusType = new StatusType();
?>