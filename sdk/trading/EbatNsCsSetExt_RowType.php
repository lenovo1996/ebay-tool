<?php
// autogenerated file 05.05.2008 16:30
// $Id: EbatNsCsSetExt_RowType.php,v 1.2 2013-04-05 11:15:51 thomasbiniasch Exp $
// $Log: EbatNsCsSetExt_RowType.php,v $
// Revision 1.2  2013-04-05 11:15:51  thomasbiniasch
// bugfixes and template updates, first running version milestone!
//
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'EbatNsCsSetExt_WidgetType.php';

/**
 *  
 *
 *
 */
class EbatNsCsSetExt_RowType extends EbatNs_ComplexType
{
	/**
	 * @var EbatNsCsSetExt_WidgetType
	 */
	public $Widget;

	/**
	 * @return EbatNsCsSetExt_WidgetType
	 * @param integer $index 
	 */
	function getWidget($index = null)
	{
		if ($index !== null) {
			return $this->Widget[$index];
		} else {
			return $this->Widget;
		}
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_WidgetType $value 
	 * @param  $index 
	 */
	function setWidget($value, $index = null)
	{
		if ($index !== null) {
			$this->Widget[$index] = $value;
		} else {
			$this->Widget = $value;
		}
	}
	/**
	 * @return void
	 * @param EbatNsCsSetExt_WidgetType $value 
	 */
	function addWidget($value)
	{
		$this->Widget[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EbatNsCsSetExt_RowType', 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd');
		$this->_elements = array_merge($this->_elements,
			array(
				'Widget' =>
				array(
					'required' => true,
					'type' => 'EbatNsCsSetExt_WidgetType',
					'nsURI' => 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd',
					'array' => true,
					'cardinality' => '1..*'
				)
			));

	}
}
?>
