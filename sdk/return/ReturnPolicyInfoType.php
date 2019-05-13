<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';

/**
  * Type defining the <b>returnPolicy</b> container, which consists of a flag to
  * indicate whether the seller is willing to provide the buyer a Return Merchandise
  * Authorization number (if requested), and a flag to indicate if the seller accepts returns to
  * more than one address. 
  * 
 **/

class ReturnPolicyInfoType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var boolean
	**/
	public $optedForRMA;

	/**
	* @var boolean
	**/
	public $optedForMultipleReturnAddress;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnPolicyInfoType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'optedForRMA' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'optedForMultipleReturnAddress' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	 * @return boolean
	 **/
	function getoptedForRMA()
	{
		return $this->optedForRMA;
	}

	/**
	 * @return void
	 **/
	function setoptedForRMA($value)
	{
		$this->optedForRMA = $value;
	}

	/**
	 * @return boolean
	 **/
	function getoptedForMultipleReturnAddress()
	{
		return $this->optedForMultipleReturnAddress;
	}

	/**
	 * @return void
	 **/
	function setoptedForMultipleReturnAddress($value)
	{
		$this->optedForMultipleReturnAddress = $value;
	}

}
?>
