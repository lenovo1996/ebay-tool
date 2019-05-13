<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'AckValue.php';
require_once 'ErrorMessage.php';
require_once 'ExtensionType.php';

/**
  * This is the base class for the response container for all service operations.
  * Returns error information associated with the request.
  * 
 **/

class BaseResponse extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var AckValue
	**/
	public $ack;

	/**
	* @var ErrorMessage
	**/
	public $errorMessage;

	/**
	* @var string
	**/
	public $version;

	/**
	* @var dateTime
	**/
	public $timestamp;

	/**
	* @var ExtensionType
	**/
	public $extension;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BaseResponse', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ack' =>
				array(
					'required' => false,
					'type' => 'AckValue',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'errorMessage' =>
				array(
					'required' => false,
					'type' => 'ErrorMessage',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
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
				'timestamp' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'extension' =>
				array(
					'required' => false,
					'type' => 'ExtensionType',
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
	 * @return AckValue
	 **/
	function getack()
	{
		return $this->ack;
	}

	/**
	 * @return void
	 **/
	function setack($value)
	{
		$this->ack = $value;
	}

	/**
	 * @return ErrorMessage
	 **/
	function geterrorMessage()
	{
		return $this->errorMessage;
	}

	/**
	 * @return void
	 **/
	function seterrorMessage($value)
	{
		$this->errorMessage = $value;
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
	 * @return dateTime
	 **/
	function gettimestamp()
	{
		return $this->timestamp;
	}

	/**
	 * @return void
	 **/
	function settimestamp($value)
	{
		$this->timestamp = $value;
	}

	/**
	 * @return ExtensionType
	 * @param integer $index 
	 **/
	function getextension($index = null)
	{
		if ($index !== null)
		{
			return $this->extension[$index];
		}
		else
		{
			return $this->extension;
		}
	}

	/**
	 * @return void
	 * @param ExtensionType $value
	 * @param integer $index 
	 **/
	function setextension($value, $index = null)
	{
		if ($index !== null)
		{
			$this->extension[$index] = $value;
		}
		else
		{
			$this->extension= $value;
		}
	}

	/**
	 * @return void
	 * @param ExtensionType $value
	 **/
	function addextension($value)
	{
		$this->extension[] = $value;
	}

}
?>
