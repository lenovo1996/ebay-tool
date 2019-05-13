<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'ErrorData.php';

/**
  * Information regarding an error or warning that occurred when eBay processed the request. Not returned when the <b>ack</b> value is <b>Success</b>.  
  * 
 **/

class ErrorMessage extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var ErrorData
	**/
	public $error;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ErrorMessage', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'error' =>
				array(
					'required' => false,
					'type' => 'ErrorData',
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
	 * @return ErrorData
	 * @param integer $index 
	 **/
	function geterror($index = null)
	{
		if ($index !== null)
		{
			return $this->error[$index];
		}
		else
		{
			return $this->error;
		}
	}

	/**
	 * @return void
	 * @param ErrorData $value
	 * @param integer $index 
	 **/
	function seterror($value, $index = null)
	{
		if ($index !== null)
		{
			$this->error[$index] = $value;
		}
		else
		{
			$this->error= $value;
		}
	}

	/**
	 * @return void
	 * @param ErrorData $value
	 **/
	function adderror($value)
	{
		$this->error[] = $value;
	}

}
?>
