<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'SellingManagerAutoListType.php';
require_once 'SellingManagerAutoRelistType.php';
require_once 'SellingManagerAutoSecondChanceOfferType.php';
require_once 'FeesType.php';

/**
  * Contains the set of automation rules associated with the specified template.
  * 
 **/

class DeleteSellingManagerTemplateAutomationRuleResponseType extends AbstractResponseType
{
	/**
	* @var SellingManagerAutoListType
	**/
	public $AutomatedListingRule;

	/**
	* @var SellingManagerAutoRelistType
	**/
	public $AutomatedRelistingRule;

	/**
	* @var SellingManagerAutoSecondChanceOfferType
	**/
	public $AutomatedSecondChanceOfferRule;

	/**
	* @var FeesType
	**/
	public $Fees;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DeleteSellingManagerTemplateAutomationRuleResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AutomatedListingRule' =>
				array(
					'required' => false,
					'type' => 'SellingManagerAutoListType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AutomatedRelistingRule' =>
				array(
					'required' => false,
					'type' => 'SellingManagerAutoRelistType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AutomatedSecondChanceOfferRule' =>
				array(
					'required' => false,
					'type' => 'SellingManagerAutoSecondChanceOfferType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Fees' =>
				array(
					'required' => false,
					'type' => 'FeesType',
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
	 * @return SellingManagerAutoListType
	 **/
	function getAutomatedListingRule()
	{
		return $this->AutomatedListingRule;
	}

	/**
	 * @return void
	 **/
	function setAutomatedListingRule($value)
	{
		$this->AutomatedListingRule = $value;
	}

	/**
	 * @return SellingManagerAutoRelistType
	 **/
	function getAutomatedRelistingRule()
	{
		return $this->AutomatedRelistingRule;
	}

	/**
	 * @return void
	 **/
	function setAutomatedRelistingRule($value)
	{
		$this->AutomatedRelistingRule = $value;
	}

	/**
	 * @return SellingManagerAutoSecondChanceOfferType
	 **/
	function getAutomatedSecondChanceOfferRule()
	{
		return $this->AutomatedSecondChanceOfferRule;
	}

	/**
	 * @return void
	 **/
	function setAutomatedSecondChanceOfferRule($value)
	{
		$this->AutomatedSecondChanceOfferRule = $value;
	}

	/**
	 * @return FeesType
	 **/
	function getFees()
	{
		return $this->Fees;
	}

	/**
	 * @return void
	 **/
	function setFees($value)
	{
		$this->Fees = $value;
	}

}
?>
