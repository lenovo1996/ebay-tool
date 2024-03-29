<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class QuestionTypeCodeType extends EbatNs_FacetType
{
	const CodeType_General = 'General';
	const CodeType_Shipping = 'Shipping';
	const CodeType_Payment = 'Payment';
	const CodeType_MultipleItemShipping = 'MultipleItemShipping';
	const CodeType_CustomizedSubject = 'CustomizedSubject';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('QuestionTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_QuestionTypeCodeType = new QuestionTypeCodeType();
?>