<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ValueTypeCodeType.php';
require_once 'SelectionModeCodeType.php';
require_once 'AspectUsageCodeType.php';
require_once 'ProductRequiredCodeType.php';
require_once 'NameValueRelationshipType.php';
require_once 'VariationPictureRuleCodeType.php';
require_once 'VariationSpecificsRuleCodeType.php';
require_once 'ValueFormatCodeType.php';

/**
  * This type is used by the <b>ValidationRules</b> containers returned in the <b>GetCategorySpecifics</b> response, which contains some rules and limits for the recommended Item Specific name (specified in the <b>NameRecommendation.Name</b> field) and corresponding value(s) (specified in the <b>ValueRecommendation.Value</b> field). These rules and limits will apply when the recommended Item Specific is subsequently used in an Add/Revise/Relist call.
  * 
 **/

class RecommendationValidationRulesType extends EbatNs_ComplexType
{
	/**
	* @var ValueTypeCodeType
	**/
	public $ValueType;

	/**
	* @var int
	**/
	public $MinValues;

	/**
	* @var int
	**/
	public $MaxValues;

	/**
	* @var SelectionModeCodeType
	**/
	public $SelectionMode;

	/**
	* @var AspectUsageCodeType
	**/
	public $AspectUsage;

	/**
	* @var int
	**/
	public $MaxValueLength;

	/**
	* @var ProductRequiredCodeType
	**/
	public $ProductRequired;

	/**
	* @var int
	**/
	public $Confidence;

	/**
	* @var NameValueRelationshipType
	**/
	public $Relationship;

	/**
	* @var VariationPictureRuleCodeType
	**/
	public $VariationPicture;

	/**
	* @var VariationSpecificsRuleCodeType
	**/
	public $VariationSpecifics;

	/**
	* @var ValueFormatCodeType
	**/
	public $ValueFormat;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RecommendationValidationRulesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ValueType' =>
				array(
					'required' => false,
					'type' => 'ValueTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MinValues' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxValues' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SelectionMode' =>
				array(
					'required' => false,
					'type' => 'SelectionModeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AspectUsage' =>
				array(
					'required' => false,
					'type' => 'AspectUsageCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxValueLength' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductRequired' =>
				array(
					'required' => false,
					'type' => 'ProductRequiredCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Confidence' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Relationship' =>
				array(
					'required' => false,
					'type' => 'NameValueRelationshipType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'VariationPicture' =>
				array(
					'required' => false,
					'type' => 'VariationPictureRuleCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VariationSpecifics' =>
				array(
					'required' => false,
					'type' => 'VariationSpecificsRuleCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ValueFormat' =>
				array(
					'required' => false,
					'type' => 'ValueFormatCodeType',
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
	 * @return ValueTypeCodeType
	 **/
	function getValueType()
	{
		return $this->ValueType;
	}

	/**
	 * @return void
	 **/
	function setValueType($value)
	{
		$this->ValueType = $value;
	}

	/**
	 * @return int
	 **/
	function getMinValues()
	{
		return $this->MinValues;
	}

	/**
	 * @return void
	 **/
	function setMinValues($value)
	{
		$this->MinValues = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxValues()
	{
		return $this->MaxValues;
	}

	/**
	 * @return void
	 **/
	function setMaxValues($value)
	{
		$this->MaxValues = $value;
	}

	/**
	 * @return SelectionModeCodeType
	 **/
	function getSelectionMode()
	{
		return $this->SelectionMode;
	}

	/**
	 * @return void
	 **/
	function setSelectionMode($value)
	{
		$this->SelectionMode = $value;
	}

	/**
	 * @return AspectUsageCodeType
	 **/
	function getAspectUsage()
	{
		return $this->AspectUsage;
	}

	/**
	 * @return void
	 **/
	function setAspectUsage($value)
	{
		$this->AspectUsage = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxValueLength()
	{
		return $this->MaxValueLength;
	}

	/**
	 * @return void
	 **/
	function setMaxValueLength($value)
	{
		$this->MaxValueLength = $value;
	}

	/**
	 * @return ProductRequiredCodeType
	 **/
	function getProductRequired()
	{
		return $this->ProductRequired;
	}

	/**
	 * @return void
	 **/
	function setProductRequired($value)
	{
		$this->ProductRequired = $value;
	}

	/**
	 * @return int
	 **/
	function getConfidence()
	{
		return $this->Confidence;
	}

	/**
	 * @return void
	 **/
	function setConfidence($value)
	{
		$this->Confidence = $value;
	}

	/**
	 * @return NameValueRelationshipType
	 * @param integer $index 
	 **/
	function getRelationship($index = null)
	{
		if ($index !== null)
		{
			return $this->Relationship[$index];
		}
		else
		{
			return $this->Relationship;
		}
	}

	/**
	 * @return void
	 * @param NameValueRelationshipType $value
	 * @param integer $index 
	 **/
	function setRelationship($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Relationship[$index] = $value;
		}
		else
		{
			$this->Relationship= $value;
		}
	}

	/**
	 * @return void
	 * @param NameValueRelationshipType $value
	 **/
	function addRelationship($value)
	{
		$this->Relationship[] = $value;
	}

	/**
	 * @return VariationPictureRuleCodeType
	 **/
	function getVariationPicture()
	{
		return $this->VariationPicture;
	}

	/**
	 * @return void
	 **/
	function setVariationPicture($value)
	{
		$this->VariationPicture = $value;
	}

	/**
	 * @return VariationSpecificsRuleCodeType
	 **/
	function getVariationSpecifics()
	{
		return $this->VariationSpecifics;
	}

	/**
	 * @return void
	 **/
	function setVariationSpecifics($value)
	{
		$this->VariationSpecifics = $value;
	}

	/**
	 * @return ValueFormatCodeType
	 **/
	function getValueFormat()
	{
		return $this->ValueFormat;
	}

	/**
	 * @return void
	 **/
	function setValueFormat($value)
	{
		$this->ValueFormat = $value;
	}

}
?>
