<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'ErrorSeverity.php';
require_once 'ErrorCategory.php';
require_once 'ErrorParameter.php';

/**
  * A container for error details.
  * 
 **/

class ErrorData extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var long
	**/
	public $errorId;

	/**
	* @var string
	**/
	public $domain;

	/**
	* @var string
	**/
	public $subdomain;

	/**
	* @var ErrorSeverity
	**/
	public $severity;

	/**
	* @var ErrorCategory
	**/
	public $category;

	/**
	* @var string
	**/
	public $message;

	/**
	* @var token
	**/
	public $exceptionId;

	/**
	* @var ErrorParameter
	**/
	public $parameter;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ErrorData', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'errorId' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'domain' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'subdomain' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'severity' =>
				array(
					'required' => false,
					'type' => 'ErrorSeverity',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'category' =>
				array(
					'required' => false,
					'type' => 'ErrorCategory',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'message' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'exceptionId' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'parameter' =>
				array(
					'required' => false,
					'type' => 'ErrorParameter',
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
	 * @return long
	 **/
	function geterrorId()
	{
		return $this->errorId;
	}

	/**
	 * @return void
	 **/
	function seterrorId($value)
	{
		$this->errorId = $value;
	}

	/**
	 * @return string
	 **/
	function getdomain()
	{
		return $this->domain;
	}

	/**
	 * @return void
	 **/
	function setdomain($value)
	{
		$this->domain = $value;
	}

	/**
	 * @return string
	 **/
	function getsubdomain()
	{
		return $this->subdomain;
	}

	/**
	 * @return void
	 **/
	function setsubdomain($value)
	{
		$this->subdomain = $value;
	}

	/**
	 * @return ErrorSeverity
	 **/
	function getseverity()
	{
		return $this->severity;
	}

	/**
	 * @return void
	 **/
	function setseverity($value)
	{
		$this->severity = $value;
	}

	/**
	 * @return ErrorCategory
	 **/
	function getcategory()
	{
		return $this->category;
	}

	/**
	 * @return void
	 **/
	function setcategory($value)
	{
		$this->category = $value;
	}

	/**
	 * @return string
	 **/
	function getmessage()
	{
		return $this->message;
	}

	/**
	 * @return void
	 **/
	function setmessage($value)
	{
		$this->message = $value;
	}

	/**
	 * @return token
	 **/
	function getexceptionId()
	{
		return $this->exceptionId;
	}

	/**
	 * @return void
	 **/
	function setexceptionId($value)
	{
		$this->exceptionId = $value;
	}

	/**
	 * @return ErrorParameter
	 * @param integer $index 
	 **/
	function getparameter($index = null)
	{
		if ($index !== null)
		{
			return $this->parameter[$index];
		}
		else
		{
			return $this->parameter;
		}
	}

	/**
	 * @return void
	 * @param ErrorParameter $value
	 * @param integer $index 
	 **/
	function setparameter($value, $index = null)
	{
		if ($index !== null)
		{
			$this->parameter[$index] = $value;
		}
		else
		{
			$this->parameter= $value;
		}
	}

	/**
	 * @return void
	 * @param ErrorParameter $value
	 **/
	function addparameter($value)
	{
		$this->parameter[] = $value;
	}

}
?>
