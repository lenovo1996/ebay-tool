<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseResponse.php';
require_once 'ReturnSummaryType.php';
require_once 'ReturnDetailType.php';

/**
  * Type defining the <b>getReturnDetail</b> response. 
  * 
 **/

class getReturnDetailResponse extends BaseResponse
{
	/**
	* @var ReturnSummaryType
	**/
	public $ReturnSummary;

	/**
	* @var ReturnDetailType
	**/
	public $ReturnDetail;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('getReturnDetailResponse', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ReturnSummary' =>
				array(
					'required' => false,
					'type' => 'ReturnSummaryType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnDetail' =>
				array(
					'required' => false,
					'type' => 'ReturnDetailType',
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
	 **/
	function getReturnSummary()
	{
		return $this->ReturnSummary;
	}

	/**
	 * @return void
	 **/
	function setReturnSummary($value)
	{
		$this->ReturnSummary = $value;
	}

	/**
	 * @return ReturnDetailType
	 **/
	function getReturnDetail()
	{
		return $this->ReturnDetail;
	}

	/**
	 * @return void
	 **/
	function setReturnDetail($value)
	{
		$this->ReturnDetail = $value;
	}

}
?>
