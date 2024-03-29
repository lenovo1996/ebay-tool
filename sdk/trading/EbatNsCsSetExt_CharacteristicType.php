<?php
// autogenerated file 05.05.2008 16:30
// $Id: EbatNsCsSetExt_CharacteristicType.php,v 1.2 2013-04-05 11:15:50 thomasbiniasch Exp $
// $Log: EbatNsCsSetExt_CharacteristicType.php,v $
// Revision 1.2  2013-04-05 11:15:50  thomasbiniasch
// bugfixes and template updates, first running version milestone!
//
//
//
require_once 'EbatNsCsSetExt_SortOrderCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'EbatNsCsSetExt_ValType.php';
require_once 'EbatNsCsSetExt_LabelType.php';

/**
 *  
 *
 *
 */
class EbatNsCsSetExt_CharacteristicType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	public $AttributeID;
	/**
	 * @var string
	 */
	public $DisplaySequence;
	/**
	 * @var string
	 */
	public $DisplayUOM;
	/**
	 * @var EbatNsCsSetExt_LabelType
	 */
	public $Label;
	/**
	 * @var EbatNsCsSetExt_SortOrderCodeType
	 */
	public $SortOrder;
	/**
	 * @var EbatNsCsSetExt_ValType
	 */
	public $ValueList;

	/**
	 * @return int
	 */
	function getAttributeID()
	{
		return $this->AttributeID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setAttributeID($value)
	{
		$this->AttributeID = $value;
	}
	/**
	 * @return string
	 */
	function getDisplaySequence()
	{
		return $this->DisplaySequence;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDisplaySequence($value)
	{
		$this->DisplaySequence = $value;
	}
	/**
	 * @return string
	 */
	function getDisplayUOM()
	{
		return $this->DisplayUOM;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDisplayUOM($value)
	{
		$this->DisplayUOM = $value;
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
	 * @return EbatNsCsSetExt_SortOrderCodeType
	 */
	function getSortOrder()
	{
		return $this->SortOrder;
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_SortOrderCodeType $value 
	 */
	function setSortOrder($value)
	{
		$this->SortOrder = $value;
	}
	/**
	 * @return EbatNsCsSetExt_ValType
	 * @param integer $index 
	 */
	function getValueList($index = null)
	{
		if ($index !== null) {
			return $this->ValueList[$index];
		} else {
			return $this->ValueList;
		}
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_ValType $value 
	 * @param  $index 
	 */
	function setValueList($value, $index = null)
	{
		if ($index !== null) {
			$this->ValueList[$index] = $value;
		} else {
			$this->ValueList = $value;
		}
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_ValType $value 
	 */
	function addValueList($value)
	{
		$this->ValueList[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EbatNsCsSetExt_CharacteristicType', 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd');
		$this->_elements = array_merge($this->_elements,
			array(
				'AttributeID' =>
				array(
					'required' => true,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'DisplaySequence' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisplayUOM' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Label' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_LabelType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SortOrder' =>
				array(
					'required' => false,
					'type' => 'EbatNsCsSetExt_SortOrderCodeType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ValueList' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_ValType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => true,
					'cardinality' => '1..*'
				)
			));

	}
}
?>
