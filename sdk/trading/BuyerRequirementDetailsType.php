<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MaximumItemRequirementsType.php';
require_once 'MaximumUnpaidItemStrikesInfoType.php';

/**
  * Type defining the <b>BuyerRequirementDetails</b> container, which allows the seller to set buyer requirements at the listing level. For the corresponding listing, all buyer requirement values/settings will overwrite values/settings in Buyer Requirements preferences in My eBay.
  * 
 **/

class BuyerRequirementDetailsType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	public $ShipToRegistrationCountry;

	/**
	* @var boolean
	**/
	public $ZeroFeedbackScore;

	/**
	* @var MaximumItemRequirementsType
	**/
	public $MaximumItemRequirements;

	/**
	* @var MaximumUnpaidItemStrikesInfoType
	**/
	public $MaximumUnpaidItemStrikesInfo;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BuyerRequirementDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ShipToRegistrationCountry' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ZeroFeedbackScore' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaximumItemRequirements' =>
				array(
					'required' => false,
					'type' => 'MaximumItemRequirementsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaximumUnpaidItemStrikesInfo' =>
				array(
					'required' => false,
					'type' => 'MaximumUnpaidItemStrikesInfoType',
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
	 * @return boolean
	 **/
	function getShipToRegistrationCountry()
	{
		return $this->ShipToRegistrationCountry;
	}

	/**
	 * @return void
	 **/
	function setShipToRegistrationCountry($value)
	{
		$this->ShipToRegistrationCountry = $value;
	}

	/**
	 * @return boolean
	 **/
	function getZeroFeedbackScore()
	{
		return $this->ZeroFeedbackScore;
	}

	/**
	 * @return void
	 **/
	function setZeroFeedbackScore($value)
	{
		$this->ZeroFeedbackScore = $value;
	}

	/**
	 * @return MaximumItemRequirementsType
	 **/
	function getMaximumItemRequirements()
	{
		return $this->MaximumItemRequirements;
	}

	/**
	 * @return void
	 **/
	function setMaximumItemRequirements($value)
	{
		$this->MaximumItemRequirements = $value;
	}

	/**
	 * @return MaximumUnpaidItemStrikesInfoType
	 **/
	function getMaximumUnpaidItemStrikesInfo()
	{
		return $this->MaximumUnpaidItemStrikesInfo;
	}

	/**
	 * @return void
	 **/
	function setMaximumUnpaidItemStrikesInfo($value)
	{
		$this->MaximumUnpaidItemStrikesInfo = $value;
	}

}
?>
