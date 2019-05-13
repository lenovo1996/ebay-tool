<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class AckValue extends EbatNsReturnManagement_FacetType
{
	const CodeType_Success = 'Success';
	const CodeType_Failure = 'Failure';
	const CodeType_Warning = 'Warning';
	const CodeType_PartialFailure = 'PartialFailure';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AckValue', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_AckValue = new AckValue();
?>