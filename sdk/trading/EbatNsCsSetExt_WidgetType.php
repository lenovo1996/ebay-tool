<?php
// autogenerated file 05.05.2008 16:30
// $Id: EbatNsCsSetExt_WidgetType.php,v 1.2 2013-04-05 11:15:47 thomasbiniasch Exp $
// $Log: EbatNsCsSetExt_WidgetType.php,v $
// Revision 1.2  2013-04-05 11:15:47  thomasbiniasch
// bugfixes and template updates, first running version milestone!
//
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'EbatNsCsSetExt_PIAttributeType.php';
require_once 'EbatNsCsSetExt_MessageType.php';

/**
 *  
 *
 *
 */
class EbatNsCsSetExt_WidgetType extends EbatNs_ComplexType
{
	/**
	 * @var EbatNsCsSetExt_PIAttributeType
	 */
	public $Attribute;
	/**
	 * @var EbatNsCsSetExt_MessageType
	 */
	public $MessageRight;
	/**
	 * @var EbatNsCsSetExt_MessageType
	 */
	public $MessageBottom;
	/**
	 * @var EbatNsCsSetExt_MessageType
	 */
	public $MessageLeft;
	/**
	 * @var EbatNsCsSetExt_MessageType
	 */
	public $MessageTop;
	/**
	 * @var EbatNsCsSetExt_MessageType
	 */
	public $TextMessage;

	/**
	 * @return EbatNsCsSetExt_PIAttributeType
	 */
	function getAttribute()
	{
		return $this->Attribute;
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_PIAttributeType $value 
	 */
	function setAttribute($value)
	{
		$this->Attribute = $value;
	}
	/**
	 * @return EbatNsCsSetExt_MessageType
	 */
	function getMessageRight()
	{
		return $this->MessageRight;
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_MessageType $value 
	 */
	function setMessageRight($value)
	{
		$this->MessageRight = $value;
	}
	/**
	 * @return EbatNsCsSetExt_MessageType
	 */
	function getMessageBottom()
	{
		return $this->MessageBottom;
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_MessageType $value 
	 */
	function setMessageBottom($value)
	{
		$this->MessageBottom = $value;
	}
	/**
	 * @return EbatNsCsSetExt_MessageType
	 */
	function getMessageLeft()
	{
		return $this->MessageLeft;
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_MessageType $value 
	 */
	function setMessageLeft($value)
	{
		$this->MessageLeft = $value;
	}
	/**
	 * @return EbatNsCsSetExt_MessageType
	 */
	function getMessageTop()
	{
		return $this->MessageTop;
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_MessageType $value 
	 */
	function setMessageTop($value)
	{
		$this->MessageTop = $value;
	}
	/**
	 * @return EbatNsCsSetExt_MessageType
	 */
	function getTextMessage()
	{
		return $this->TextMessage;
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_MessageType $value 
	 */
	function setTextMessage($value)
	{
		$this->TextMessage = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EbatNsCsSetExt_WidgetType', 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd');
		$this->_elements = array_merge($this->_elements,
			array(
				'Attribute' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_PIAttributeType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '1..1'
				),
				'MessageRight' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_MessageType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '1..1'
				),
				'MessageBottom' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_MessageType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '1..1'
				),
				'MessageLeft' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_MessageType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '1..1'
				),
				'MessageTop' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_MessageType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '1..1'
				),
				'TextMessage' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_MessageType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => false,
					'cardinality' => '1..1'
				)
			));

	}
}
?>
