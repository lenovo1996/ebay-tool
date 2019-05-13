<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';

/**
  * Reserved for future use.
  * 
 **/

class ExtensionType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var positiveInteger
	**/
	public $id;

	/**
	* @var string
	**/
	public $version;

	/**
	* @var string
	**/
	public $contentType;

	/**
	* @var string
	**/
	public $value;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ExtensionType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'id' =>
				array(
					'required' => false,
					'type' => 'positiveInteger',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'version' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'contentType' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'value' =>
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
	 * @return positiveInteger
	 **/
	function getid()
	{
		return $this->id;
	}

	/**
	 * @return void
	 **/
	function setid($value)
	{
		$this->id = $value;
	}

	/**
	 * @return string
	 **/
	function getversion()
	{
		return $this->version;
	}

	/**
	 * @return void
	 **/
	function setversion($value)
	{
		$this->version = $value;
	}

	/**
	 * @return string
	 **/
	function getcontentType()
	{
		return $this->contentType;
	}

	/**
	 * @return void
	 **/
	function setcontentType($value)
	{
		$this->contentType = $value;
	}

	/**
	 * @return string
	 **/
	function getvalue()
	{
		return $this->value;
	}

	/**
	 * @return void
	 **/
	function setvalue($value)
	{
		$this->value = $value;
	}

}
?>
