<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class ErrorCategory extends EbatNsReturnManagement_FacetType
{
	const CodeType_System = 'System';
	const CodeType_Application = 'Application';
	const CodeType_Request = 'Request';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ErrorCategory', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_ErrorCategory = new ErrorCategory();
?>