<?php
// autogenerated file 05.05.2008 16:30
// $Id: EbatNsCsSetExt_PIAttributeType.php,v 1.2 2013-04-05 11:15:57 thomasbiniasch Exp $
// $Log: EbatNsCsSetExt_PIAttributeType.php,v $
// Revision 1.2  2013-04-05 11:15:57  thomasbiniasch
// bugfixes and template updates, first running version milestone!
//
//
//
require_once 'EbatNsCsSetExt_ValueListType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'EbatNsCsSetExt_DependencyType.php';
require_once 'EbatNsCsSetExt_ValidationRuleArrayType.php';
require_once 'EbatNsCsSetExt_CurrentTimeType.php';
require_once 'EbatNsCsSetExt_InputType.php';
require_once 'EbatNsCsSetExt_LabelType.php';
require_once 'EbatNsCsSetExt_ValType.php';

/**
 *  
 *
 *
 */
class EbatNsCsSetExt_PIAttributeType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	public $Day;
	/**
	 * @var string
	 */
	public $Month;
	/**
	 * @var string
	 */
	public $Year;
	/**
	 * @var EbatNsCsSetExt_CurrentTimeType
	 */
	public $CurrentTime;
	/**
	 * @var EbatNsCsSetExt_ValType
	 */
	public $Value;
	/**
	 * @var string
	 */
	public $SellingDisplayLabel;
	/**
	 * @var int
	 */
	public $Type;
	/**
	 * @var string
	 */
	public $MessageRight;
	/**
	 * @var int
	 */
	public $EditType;
	/**
	 * @var EbatNsCsSetExt_ValueListType
	 */
	public $ValueList;
	/**
	 * @var EbatNsCsSetExt_DependencyType
	 */
	public $Dependency;
	/**
	 * @var EbatNsCsSetExt_ValidationRuleArrayType
	 */
	public $ValidationRules;
	/**
	 * @var string
	 */
	public $MessageBottom;
	/**
	 * @var string
	 */
	public $DefaultUnitOfMeasureFormatString;
	/**
	 * @var EbatNsCsSetExt_LabelType
	 */
	public $Label;
	/**
	 * @var EbatNsCsSetExt_InputType
	 */
	public $Input;

	/**
	 * @return string
	 */
	function getDay()
	{
		return $this->Day;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDay($value)
	{
		$this->Day = $value;
	}
	/**
	 * @return string
	 */
	function getMonth()
	{
		return $this->Month;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMonth($value)
	{
		$this->Month = $value;
	}
	/**
	 * @return string
	 */
	function getYear()
	{
		return $this->Year;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setYear($value)
	{
		$this->Year = $value;
	}
	/**
	 * @return EbatNsCsSetExt_CurrentTimeType
	 */
	function getCurrentTime()
	{
		return $this->CurrentTime;
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_CurrentTimeType $value 
	 */
	function setCurrentTime($value)
	{
		$this->CurrentTime = $value;
	}
	/**
	 * @return EbatNsCsSetExt_ValType
	 * @param integer $index 
	 */
	function getValue($index = null)
	{
		if ($index !== null) {
			return $this->Value[$index];
		} else {
			return $this->Value;
		}
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_ValType $value 
	 * @param  $index 
	 */
	function setValue($value, $index = null)
	{
		if ($index !== null) {
			$this->Value[$index] = $value;
		} else {
			$this->Value = $value;
		}
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_ValType $value 
	 */
	function addValue($value)
	{
		$this->Value[] = $value;
	}
	/**
	 * @return string
	 */
	function getSellingDisplayLabel()
	{
		return $this->SellingDisplayLabel;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSellingDisplayLabel($value)
	{
		$this->SellingDisplayLabel = $value;
	}
	/**
	 * @return int
	 */
	function getType()
	{
		return $this->Type;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setType($value)
	{
		$this->Type = $value;
	}
	/**
	 * @return string
	 */
	function getMessageRight()
	{
		return $this->MessageRight;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMessageRight($value)
	{
		$this->MessageRight = $value;
	}
	/**
	 * @return int
	 */
	function getEditType()
	{
		return $this->EditType;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setEditType($value)
	{
		$this->EditType = $value;
	}
	/**
	 * @return EbatNsCsSetExt_ValueListType
	 */
	function getValueList()
	{
		return $this->ValueList;
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_ValueListType $value 
	 */
	function setValueList($value)
	{
		$this->ValueList = $value;
	}
	/**
	 * @return EbatNsCsSetExt_DependencyType
	 * @param integer $index 
	 */
	function getDependency($index = null)
	{
		if ($index !== null) {
			return $this->Dependency[$index];
		} else {
			return $this->Dependency;
		}
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_DependencyType $value 
	 * @param  $index 
	 */
	function setDependency($value, $index = null)
	{
		if ($index !== null) {
			$this->Dependency[$index] = $value;
		} else {
			$this->Dependency = $value;
		}
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_DependencyType $value 
	 */
	function addDependency($value)
	{
		$this->Dependency[] = $value;
	}
	/**
	 * @return EbatNsCsSetExt_ValidationRuleArrayType
	 * @param integer $index 
	 */
	function getValidationRules($index = null)
	{
		if ($index !== null) {
			return $this->ValidationRules[$index];
		} else {
			return $this->ValidationRules;
		}
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_ValidationRuleArrayType $value 
	 * @param  $index 
	 */
	function setValidationRules($value, $index = null)
	{
		if ($index !== null) {
			$this->ValidationRules[$index] = $value;
		} else {
			$this->ValidationRules = $value;
		}
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_ValidationRuleArrayType $value 
	 */
	function addValidationRules($value)
	{
		$this->ValidationRules[] = $value;
	}
	/**
	 * @return string
	 */
	function getMessageBottom()
	{
		return $this->MessageBottom;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMessageBottom($value)
	{
		$this->MessageBottom = $value;
	}
	/**
	 * @return string
	 */
	function getDefaultUnitOfMeasureFormatString()
	{
		return $this->DefaultUnitOfMeasureFormatString;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDefaultUnitOfMeasureFormatString($value)
	{
		$this->DefaultUnitOfMeasureFormatString = $value;
	}
	/**
	 * @return EbatNsCsSetExt_LabelType
	 */
	function getLabel()
	{
		return $this->Label;
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_LabelType $value 
	 */
	function setLabel($value)
	{
		$this->Label = $value;
	}
	/**
	 * @return EbatNsCsSetExt_InputType
	 */
	function getInput()
	{
		return $this->Input;
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_InputType $value 
	 */
	function setInput($value)
	{
		$this->Input = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EbatNsCsSetExt_PIAttributeType', 'http://www.w3.org/2001/XMLSchema');
		$this->_elements = array_merge($this->_elements,
			array(
				'Day' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Month' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Year' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'CurrentTime' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_CurrentTimeType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Value' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_ValType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => true,
					'cardinality' => '1..*'
				),
				'SellingDisplayLabel' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Type' =>
				array(
					'required' => true,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'MessageRight' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'EditType' =>
				array(
					'required' => true,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'ValueList' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_ValueListType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Dependency' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_DependencyType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ValidationRules' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_ValidationRuleArrayType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => true,
					'cardinality' => '0..*'
				),
				'MessageBottom' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'DefaultUnitOfMeasureFormatString' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'Label' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_LabelType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Input' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_InputType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '0..1'
				)
			));
	$this->_attributes = array_merge($this->_attributes,
		array(
			'attributeID' =>
			array(
				'name' => 'attributeID',
				'type' => 'int',
				'use' => 'required'
			),
			'attributeLabel' =>
			array(
				'name' => 'attributeLabel',
				'type' => 'string',
				'use' => 'required'
			),
			'id' =>
			array(
				'name' => 'id',
				'type' => 'int',
				'use' => 'required'
			),
			'vivisible' =>
			array(
				'name' => 'vivisible',
				'type' => 'boolean',
				'use' => 'required'
			),
			'count' =>
			array(
				'name' => 'count',
				'type' => 'int',
				'use' => 'required'
			),
			'source' =>
			array(
				'name' => 'source',
				'type' => 'int',
				'use' => 'required'
			),
			'displaysequence' =>
			array(
				'name' => 'displaysequence',
				'type' => 'int',
				'use' => 'required'
			),
			'pageLocation' =>
			array(
				'name' => 'pageLocation',
				'type' => 'string',
				'use' => 'required'
			),
			'labelVisible' =>
			array(
				'name' => 'labelVisible',
				'type' => 'boolean',
				'use' => 'required'
			),
			'parentAttrId' =>
			array(
				'name' => 'parentAttrId',
				'type' => 'int',
				'use' => 'required'
			),
			'align' =>
			array(
				'name' => 'align',
				'type' => 'string',
				'use' => 'required'
			),
			'quadrant' =>
			array(
				'name' => 'quadrant',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
