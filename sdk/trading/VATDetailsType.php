<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is used to set/display details related to VAT (Value-Added Tax) and Business Seller features.
  * <br>
  * <br>
  * <span class="tablenote"><b>Note:</b>
  * VAT is not applicable to all countries, including the US. Sellers must be registered as Business Sellers on the site they are selling on in order to use the Business Seller-related fields.
  * </span>
  * 
 **/

class VATDetailsType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $BusinessSeller;

	/**
	* @var boolean
	**/
	protected $RestrictedToBusiness;

	/**
	* @var float
	**/
	protected $VATPercent;

	/**
	* @var string
	**/
	protected $VATSite;

	/**
	* @var string
	**/
	protected $VATID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VATDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BusinessSeller' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RestrictedToBusiness' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATSite' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return boolean
	 **/
	function getBusinessSeller()
	{
		return $this->BusinessSeller;
	}

	/**
	 * @return void
	 **/
	function setBusinessSeller($value)
	{
		$this->BusinessSeller = $value;
	}

	/**
	 * @return boolean
	 **/
	function getRestrictedToBusiness()
	{
		return $this->RestrictedToBusiness;
	}

	/**
	 * @return void
	 **/
	function setRestrictedToBusiness($value)
	{
		$this->RestrictedToBusiness = $value;
	}

	/**
	 * @return float
	 **/
	function getVATPercent()
	{
		return $this->VATPercent;
	}

	/**
	 * @return void
	 **/
	function setVATPercent($value)
	{
		$this->VATPercent = $value;
	}

	/**
	 * @return string
	 **/
	function getVATSite()
	{
		return $this->VATSite;
	}

	/**
	 * @return void
	 **/
	function setVATSite($value)
	{
		$this->VATSite = $value;
	}

	/**
	 * @return string
	 **/
	function getVATID()
	{
		return $this->VATID;
	}

	/**
	 * @return void
	 **/
	function setVATID($value)
	{
		$this->VATID = $value;
	}

}
?>
