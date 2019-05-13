<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseResponse.php';
require_once 'MetaDataCodeResultType.php';

/**
  *   Type defining the <b>getReturnMetadata</b> response. 
  *   
 **/

class GetReturnMetadataResponse extends BaseResponse
{
	/**
	* @var MetaDataCodeResultType
	**/
	public $metadataCodeValues;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetReturnMetadataResponse', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'metadataCodeValues' =>
				array(
					'required' => false,
					'type' => 'MetaDataCodeResultType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return MetaDataCodeResultType
	 * @param integer $index 
	 **/
	function getmetadataCodeValues($index = null)
	{
		if ($index !== null)
		{
			return $this->metadataCodeValues[$index];
		}
		else
		{
			return $this->metadataCodeValues;
		}
	}

	/**
	 * @return void
	 * @param MetaDataCodeResultType $value
	 * @param integer $index 
	 **/
	function setmetadataCodeValues($value, $index = null)
	{
		if ($index !== null)
		{
			$this->metadataCodeValues[$index] = $value;
		}
		else
		{
			$this->metadataCodeValues= $value;
		}
	}

	/**
	 * @return void
	 * @param MetaDataCodeResultType $value
	 **/
	function addmetadataCodeValues($value)
	{
		$this->metadataCodeValues[] = $value;
	}

}
?>
