<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';

/**
  * Type defining the <b>paginationOutput</b> container, which consists of fields
  * that indicate the total number of pages and returns that
  * match the input criteria, the number of returns per page, and the current page
  * number being viewed. 
  * 
 **/

class PaginationOutput extends EbatNsReturnManagement_ComplexType
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
	* @var int
	**/
	public $totalPages;

	/**
	* @var int
	**/
	public $totalEntries;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaginationOutput', 'http://www.ebay.com/marketplace/returns/v1/services');
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
				),
				'totalPages' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'totalEntries' =>
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

	/**
	 * @return int
	 **/
	function gettotalPages()
	{
		return $this->totalPages;
	}

	/**
	 * @return void
	 **/
	function settotalPages($value)
	{
		$this->totalPages = $value;
	}

	/**
	 * @return int
	 **/
	function gettotalEntries()
	{
		return $this->totalEntries;
	}

	/**
	 * @return void
	 **/
	function settotalEntries($value)
	{
		$this->totalEntries = $value;
	}

}
?>
