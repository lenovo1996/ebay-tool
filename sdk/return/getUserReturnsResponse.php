<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseResponse.php';
require_once 'ReturnSummaryType.php';
require_once 'PaginationOutput.php';

/**
  * Type defining the response container for the <b>getUserReturns</b> call. High-level 
  * information is shown for each return that is retrieved. 
  * 
 **/

class getUserReturnsResponse extends BaseResponse
{
	/**
	* @var ReturnSummaryType
	**/
	public $returns;

	/**
	* @var PaginationOutput
	**/
	public $paginationOutput;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('getUserReturnsResponse', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'returns' =>
				array(
					'required' => false,
					'type' => 'ReturnSummaryType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => true,
					'cardinality' => '0..*'
				),
				'paginationOutput' =>
				array(
					'required' => false,
					'type' => 'PaginationOutput',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ReturnSummaryType
	 * @param integer $index 
	 **/
	function getreturns($index = null)
	{
		if ($index !== null)
		{
			return $this->returns[$index];
		}
		else
		{
			return $this->returns;
		}
	}

	/**
	 * @return void
	 * @param ReturnSummaryType $value
	 * @param integer $index 
	 **/
	function setreturns($value, $index = null)
	{
		if ($index !== null)
		{
			$this->returns[$index] = $value;
		}
		else
		{
			$this->returns= $value;
		}
	}

	/**
	 * @return void
	 * @param ReturnSummaryType $value
	 **/
	function addreturns($value)
	{
		$this->returns[] = $value;
	}

	/**
	 * @return PaginationOutput
	 **/
	function getpaginationOutput()
	{
		return $this->paginationOutput;
	}

	/**
	 * @return void
	 **/
	function setpaginationOutput($value)
	{
		$this->paginationOutput = $value;
	}

}
?>
