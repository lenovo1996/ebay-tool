<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class MetadataEntryType extends EbatNsReturnManagement_FacetType
{
	const CodeType_META_DATA_CODE = 'META_DATA_CODE';
	const CodeType_ALL = 'ALL';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MetadataEntryType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_MetadataEntryType = new MetadataEntryType();
?>