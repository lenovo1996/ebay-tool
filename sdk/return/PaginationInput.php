<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';

/**
  * Type defining the <b>paginationInput</b> container, which is used to control the
  * pagination of the result set, including the number of returns to return
  * per page and the page number you want to return in the output. 
  * 
 **/

class PaginationInput extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var int
	**/
	public $pageNumber;

	/**
	* @var int
	**/
	public $entriesPerPage;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaginationInput', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'pageNumber' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'entriesPerPage' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return int
	 **/
	function getpageNumber()
	{
		return $this->pageNumber;
	}

	/**
	 * @return void
	 **/
	function setpageNumber($value)
	{
		$this->pageNumber = $value;
	}

	/**
	 * @return int
	 **/
	function getentriesPerPage()
	{
		return $this->entriesPerPage;
	}

	/**
	 * @return void
	 **/
	function setentriesPerPage($value)
	{
		$this->entriesPerPage = $value;
	}

}
?>
