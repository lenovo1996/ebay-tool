<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>ReturnPolicyDetails.ReturnsAccepted</b> container that is returned in <b>GeteBayDetails</b>. This container contains the values that may be used in the <b>ReturnPolicy.ReturnsAcceptedOption</b> field of Add/Revise/Relist API calls.
  * <br><br>
  * <span class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call returns site-default Return Policy settings. For most categories within a given eBay site, the supported Return Policy options/values are the same, but there a few exceptions. To discover what returns accepted options that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsAcceptedValues</code> and/or <code>InternationalReturnsAcceptedValues</code> as <b>FeatureID</b> values to see the returns accepted options available for domestic and international returns, respectively.
  * </span>
  * 
 **/

class ReturnsAcceptedDetailsType extends EbatNs_ComplexType
{
	/**
	* @var token
	**/
	protected $ReturnsAcceptedOption;

	/**
	* @var string
	**/
	protected $Description;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnsAcceptedDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ReturnsAcceptedOption' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return token
	 **/
	function getReturnsAcceptedOption()
	{
		return $this->ReturnsAcceptedOption;
	}

	/**
	 * @return void
	 **/
	function setReturnsAcceptedOption($value)
	{
		$this->ReturnsAcceptedOption = $value;
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

}
?>
