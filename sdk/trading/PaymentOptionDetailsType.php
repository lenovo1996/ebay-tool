<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'BuyerPaymentMethodCodeType.php';

/**
  * This type is used by the <b>PaymentOptionDetails</b> containers that are returned in <b>GeteBayDetails</b> if the <code>PaymentOptionDetails</code> value is used in a <b>DetailName</b> field in the call request.
  * <br><br>
  * <span class="tablenote"><b>Note: </b> Although site-level payment options are still returned in <b>GeteBayDetails</b>, it may be better to use the <b>GetCategoryFeatures</b> call instead, as this call returns the specific payment options that are accepted in specific categories.
  * </span>
  * <br>
  * <span class="tablenote"><b>Note: </b> For sellers opted in to the new eBay Managed Payments program, an accepted payment method is no longer necessary as listing time, so no payment options will be passed in to a <b>PaymentMethods</b> fields in an Add/Revise/Relist call.
  * </span>
  * 
 **/

class PaymentOptionDetailsType extends EbatNs_ComplexType
{
	/**
	* @var BuyerPaymentMethodCodeType
	**/
	public $PaymentOption;

	/**
	* @var string
	**/
	public $Description;

	/**
	* @var string
	**/
	public $DetailVersion;

	/**
	* @var dateTime
	**/
	public $UpdateTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaymentOptionDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PaymentOption' =>
				array(
					'required' => false,
					'type' => 'BuyerPaymentMethodCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Description' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DetailVersion' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UpdateTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	 * @return BuyerPaymentMethodCodeType
	 **/
	function getPaymentOption()
	{
		return $this->PaymentOption;
	}

	/**
	 * @return void
	 **/
	function setPaymentOption($value)
	{
		$this->PaymentOption = $value;
	}

	/**
	 * @return string
	 **/
	function getDescription()
	{
		return $this->Description;
	}

	/**
	 * @return void
	 **/
	function setDescription($value)
	{
		$this->Description = $value;
	}

	/**
	 * @return string
	 **/
	function getDetailVersion()
	{
		return $this->DetailVersion;
	}

	/**
	 * @return void
	 **/
	function setDetailVersion($value)
	{
		$this->DetailVersion = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}

	/**
	 * @return void
	 **/
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
	}

}
?>
