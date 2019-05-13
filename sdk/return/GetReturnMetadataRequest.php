<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseRequest.php';
require_once 'MetadataCodeType.php';

/**
  *   Type defining the <b>getReturnMetadata</b> request. This call is used by a
  * seller to get a list of possible return reasons, the refund due date, the RMA due date, 
  * or all three pieces of information.
  *   
 **/

class GetReturnMetadataRequest extends BaseRequest
{
	/**
	* @var MetadataCodeType
	**/
	public $metadataEntryCode;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetReturnMetadataRequest', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'metadataEntryCode' =>
				array(
					'required' => false,
					'type' => 'MetadataCodeType',
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
	 * @return MetadataCodeType
	 * @param integer $index 
	 **/
	function getmetadataEntryCode($index = null)
	{
		if ($index !== null)
		{
			return $this->metadataEntryCode[$index];
		}
		else
		{
			return $this->metadataEntryCode;
		}
	}

	/**
	 * @return void
	 * @param MetadataCodeType $value
	 * @param integer $index 
	 **/
	function setmetadataEntryCode($value, $index = null)
	{
		if ($index !== null)
		{
			$this->metadataEntryCode[$index] = $value;
		}
		else
		{
			$this->metadataEntryCode= $value;
		}
	}

	/**
	 * @return void
	 * @param MetadataCodeType $value
	 **/
	function addmetadataEntryCode($value)
	{
		$this->metadataEntryCode[] = $value;
	}

}
?>
