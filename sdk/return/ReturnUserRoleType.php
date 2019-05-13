<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class ReturnUserRoleType extends EbatNsReturnManagement_FacetType
{
	const CodeType_BUYER = 'BUYER';
	const CodeType_SELLER = 'SELLER';
	const CodeType_EBAY = 'EBAY';
	const CodeType_SYSTEM = 'SYSTEM';
	const CodeType_OTHER = 'OTHER';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReturnUserRoleType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_ReturnUserRoleType = new ReturnUserRoleType();
?>