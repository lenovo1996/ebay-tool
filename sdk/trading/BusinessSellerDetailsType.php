<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AddressType.php';
require_once 'VATDetailsType.php';

/**
  *   Type used by the <b>BusinessSellerDetails</b> container, which is returned in an <b>Item</b> node if the item's seller is registered on eBay as a Business Seller.
  * 
 **/

class BusinessSellerDetailsType extends EbatNs_ComplexType
{
	/**
	* @var AddressType
	**/
	public $Address;

	/**
	* @var string
	**/
	public $Fax;

	/**
	* @var string
	**/
	public $Email;

	/**
	* @var string
	**/
	public $AdditionalContactInformation;

	/**
	* @var string
	**/
	public $TradeRegistrationNumber;

	/**
	* @var boolean
	**/
	public $LegalInvoice;

	/**
	* @var string
	**/
	public $TermsAndConditions;

	/**
	* @var VATDetailsType
	**/
	public $VATDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BusinessSellerDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Address' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Fax' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Email' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AdditionalContactInformation' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TradeRegistrationNumber' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LegalInvoice' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TermsAndConditions' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATDetails' =>
				array(
					'required' => false,
					'type' => 'VATDetailsType',
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
	 * @return AddressType
	 **/
	function getAddress()
	{
		return $this->Address;
	}

	/**
	 * @return void
	 **/
	function setAddress($value)
	{
		$this->Address = $value;
	}

	/**
	 * @return string
	 **/
	function getFax()
	{
		return $this->Fax;
	}

	/**
	 * @return void
	 **/
	function setFax($value)
	{
		$this->Fax = $value;
	}

	/**
	 * @return string
	 **/
	function getEmail()
	{
		return $this->Email;
	}

	/**
	 * @return void
	 **/
	function setEmail($value)
	{
		$this->Email = $value;
	}

	/**
	 * @return string
	 **/
	function getAdditionalContactInformation()
	{
		return $this->AdditionalContactInformation;
	}

	/**
	 * @return void
	 **/
	function setAdditionalContactInformation($value)
	{
		$this->AdditionalContactInformation = $value;
	}

	/**
	 * @return string
	 **/
	function getTradeRegistrationNumber()
	{
		return $this->TradeRegistrationNumber;
	}

	/**
	 * @return void
	 **/
	function setTradeRegistrationNumber($value)
	{
		$this->TradeRegistrationNumber = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLegalInvoice()
	{
		return $this->LegalInvoice;
	}

	/**
	 * @return void
	 **/
	function setLegalInvoice($value)
	{
		$this->LegalInvoice = $value;
	}

	/**
	 * @return string
	 **/
	function getTermsAndConditions()
	{
		return $this->TermsAndConditions;
	}

	/**
	 * @return void
	 **/
	function setTermsAndConditions($value)
	{
		$this->TermsAndConditions = $value;
	}

	/**
	 * @return VATDetailsType
	 **/
	function getVATDetails()
	{
		return $this->VATDetails;
	}

	/**
	 * @return void
	 **/
	function setVATDetails($value)
	{
		$this->VATDetails = $value;
	}

}
?>
