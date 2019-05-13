<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_FacetType.php';

class UserFilterRoleType extends EbatNsReturnManagement_FacetType
{
	const CodeType_BUYER = 'BUYER';
	const CodeType_SELLER = 'SELLER';
	const CodeType_BUYERORSELLER = 'BUYERORSELLER';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('UserFilterRoleType', 'http://www.ebay.com/marketplace/returns/v1/services');
	}
}
$Facet_UserFilterRoleType = new UserFilterRoleType();
?>