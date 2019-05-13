<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class ReturnSortType extends EbatNsReturnManagement_FacetType
{
	const CodeType_FilingDate = 'FilingDate';
	const CodeType_EstimatedAmount = 'EstimatedAmount';
	const CodeType_BuyerLoginName = 'BuyerLoginName';
	const CodeType_RefundDueDate = 'RefundDueDate';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReturnSortType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_ReturnSortType = new ReturnSortType();
?>