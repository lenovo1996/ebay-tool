<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class ReturnSortOrderType extends EbatNsReturnManagement_FacetType
{
	const CodeType_Ascending = 'Ascending';
	const CodeType_Descending = 'Descending';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReturnSortOrderType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_ReturnSortOrderType = new ReturnSortOrderType();
?>