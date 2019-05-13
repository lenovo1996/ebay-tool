<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';

/**
  * Parent type of the <b>ActivityDetailType</b> and <b>ReturnReasonType</b> 
  * enumeration types. 
  * 
 **/

class EnumerationDetailType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var token
	**/
	public $code;

	/**
	* @var token
	**/
	public $description;

	/**
	* @var token
	**/
	public $content;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('EnumerationDetailType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'code' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'description' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'content' =>
				array(
					'required' => false,
					'type' => 'token',
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
	function getcode()
	{
		return $this->code;
	}

	/**
	 * @return void
	 **/
	function setcode($value)
	{
		$this->code = $value;
	}

	/**
	 * @return token
	 **/
	function getdescription()
	{
		return $this->description;
	}

	/**
	 * @return void
	 **/
	function setdescription($value)
	{
		$this->description = $value;
	}

	/**
	 * @return token
	 **/
	function getcontent()
	{
		return $this->content;
	}

	/**
	 * @return void
	 **/
	function setcontent($value)
	{
		$this->content = $value;
	}

}
?>
