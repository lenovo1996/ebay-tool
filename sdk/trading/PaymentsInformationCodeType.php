<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PaymentInformationCodeType.php';

/**
  * This type is deprecated.
  * 
 **/

class PaymentsInformationCodeType extends EbatNs_ComplexType
{
	/**
	* @var PaymentInformationCodeType
	**/
	public $Payments;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaymentsInformationCodeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Payments' =>
				array(
					'required' => false,
					'type' => 'PaymentInformationCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return PaymentInformationCodeType
	 **/
	function getPayments()
	{
		return $this->Payments;
	}

	/**
	 * @return void
	 **/
	function setPayments($value)
	{
		$this->Payments = $value;
	}

}
?>
