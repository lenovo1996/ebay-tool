<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'MetadataCodeType.php';

/**
  * Type defining the <b>metadataCodeValues</b> container that is returned in the 
  * <b>getReturnMetadata</b> response. The <b>metadataCodeValues</b> 
  * container consists of either a <b>REFUND_DUE_UPON_ITEM_ARRIVAL</b>, a 
  * <b>RMA_DUE_UPON_RETURN_START</b>, or a <b>RETURN_REASONS</b> value.
  * The metadata that is returned is dependent on the <b>metadataEntryCode</b>
  * value(s) that are passed in the request.
  * 
 **/

class MetaDataCodeResultType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var MetadataCodeType
	**/
	public $codeName;

	/**
	* @var string
	**/
	public $value;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MetaDataCodeResultType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'codeName' =>
				array(
					'required' => true,
					'type' => 'MetadataCodeType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '1..1'
				),
				'value' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '1..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return MetadataCodeType
	 **/
	function getcodeName()
	{
		return $this->codeName;
	}

	/**
	 * @return void
	 **/
	function setcodeName($value)
	{
		$this->codeName = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getvalue($index = null)
	{
		if ($index !== null)
		{
			return $this->value[$index];
		}
		else
		{
			return $this->value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setvalue($value, $index = null)
	{
		if ($index !== null)
		{
			$this->value[$index] = $value;
		}
		else
		{
			$this->value= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addvalue($value)
	{
		$this->value[] = $value;
	}

}
?>
