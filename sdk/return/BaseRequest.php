<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'ExtensionType.php';

/**
  * This is the base class for the request container for all service operations.
  * 
 **/

class BaseRequest extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var ExtensionType
	**/
	public $extension;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BaseRequest', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
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
