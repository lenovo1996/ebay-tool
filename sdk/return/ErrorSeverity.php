<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class ErrorSeverity extends EbatNsReturnManagement_FacetType
{
	const CodeType_Error = 'Error';
	const CodeType_Warning = 'Warning';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ErrorSeverity', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_ErrorSeverity = new ErrorSeverity();
?>