<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SiteCodeType.php';

/**
  * This type is used by the <b>IntegratedMerchantCreditCardInfo</b> container that is returned in the <b>GetUser</b> response if the seller has a payment gateway account on one or more eBay marketplaces. If a seller has a payment gateway account, that seller can pass in a value of <code>IntegratedMerchantCreditCard</code> as an accepted payment method field in an Add/Revise/Relist call, and that eBay listing will automatically show buyers the major credit cards that are accepted for that particular marketplace.
  * <br><br>
  * <span class="tablenote"><b>Note: </b>
  * Beginning on May 1, 2019,  eBay will no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
  * </span>
  * 
 **/

class IntegratedMerchantCreditCardInfoType extends EbatNs_ComplexType
{
	/**
	* @var SiteCodeType
	**/
	protected $SupportedSite;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('IntegratedMerchantCreditCardInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SupportedSite' =>
				array(
					'required' => false,
					'type' => 'SiteCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return SiteCodeType
	 * @param integer $index 
	 **/
	function getSupportedSite($index = null)
	{
		if ($index !== null)
		{
			return $this->SupportedSite[$index];
		}
		else
		{
			return $this->SupportedSite;
		}
	}

	/**
	 * @return void
	 * @param SiteCodeType $value
	 * @param integer $index 
	 **/
	function setSupportedSite($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SupportedSite[$index] = $value;
		}
		else
		{
			$this->SupportedSite= $value;
		}
	}

	/**
	 * @return void
	 * @param SiteCodeType $value
	 **/
	function addSupportedSite($value)
	{
		$this->SupportedSite[] = $value;
	}

}
?>
