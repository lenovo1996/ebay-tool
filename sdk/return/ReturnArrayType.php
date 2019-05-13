<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'ReturnSummaryType.php';

/**
  * Type defining the <b>Returns</b> container in the <b>getUserReturns</b> 
  * response. The <b>Returns</b> container is a root container that consists of one 
  * or more returns. A <b>ReturnsSummary</b> node is returned for each return 
  * that is retrieved.
  * 
 **/

class ReturnArrayType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var ReturnSummaryType
	**/
	public $ReturnSummary;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnArrayType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ReturnSummary' =>
				array(
					'required' => false,
					'type' => 'ReturnSummaryType',
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
	 * @return ReturnSummaryType
	 * @param integer $index 
	 **/
	function getReturnSummary($index = null)
	{
		if ($index !== null)
		{
			return $this->ReturnSummary[$index];
		}
		else
		{
			return $this->ReturnSummary;
		}
	}

	/**
	 * @return void
	 * @param ReturnSummaryType $value
	 * @param integer $index 
	 **/
	function setReturnSummary($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ReturnSummary[$index] = $value;
		}
		else
		{
			$this->ReturnSummary= $value;
		}
	}

	/**
	 * @return void
	 * @param ReturnSummaryType $value
	 **/
	function addReturnSummary($value)
	{
		$this->ReturnSummary[] = $value;
	}

}
?>
