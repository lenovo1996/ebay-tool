<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'TransactionArrayType.php';
require_once 'PaginationResultType.php';

/**
  * Contains a paginated list of order line items.
  * 
 **/

class PaginatedTransactionArrayType extends EbatNs_ComplexType
{
	/**
	* @var TransactionArrayType
	**/
	public $TransactionArray;

	/**
	* @var PaginationResultType
	**/
	public $PaginationResult;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaginatedTransactionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'TransactionArray' =>
				array(
					'required' => false,
					'type' => 'TransactionArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return TransactionArrayType
	 **/
	function getTransactionArray()
	{
		return $this->TransactionArray;
	}

	/**
	 * @return void
	 **/
	function setTransactionArray($value)
	{
		$this->TransactionArray = $value;
	}

	/**
	 * @return PaginationResultType
	 **/
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}

	/**
	 * @return void
	 **/
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}

}
?>
