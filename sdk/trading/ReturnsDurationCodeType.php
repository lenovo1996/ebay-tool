<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ReturnsDurationCodeType extends EbatNs_FacetType
{
	const CodeType_Days_14 = 'Days_14';
	const CodeType_Days_30 = 'Days_30';
	const CodeType_Days_60 = 'Days_60';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReturnsDurationCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ReturnsDurationCodeType = new ReturnsDurationCodeType();
?>