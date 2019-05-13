<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNsReturnManagement_ComplexType.php';
require_once 'ReturnStatusInputType.php';

/**
  * Type defining the <b>ReturnStatusFilter</b> container. This container is used to
  * retrieve returns in specific states.
  * If one or more <b>ReturnStatus</b> filters are used, results are restricted to
  * returns in the specified states. If return status filtering is not used, returns 
  * in all states are retrieved. The <b>ReturnStatusFilter</b> 
  * container uses Boolean OR logic, which means that all returns matching the 
  * specified states are retrieved.
  * 
 **/

class ReturnStatusFilterType extends EbatNsReturnManagement_ComplexType
{
	/**
	* @var ReturnStatusInputType
	**/
	public $ReturnStatus;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnStatusFilterType', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ReturnStatus' =>
				array(
					'required' => true,
					'type' => 'ReturnStatusInputType',
					'nsURI' => 'http://www.ebay.com/marketplace/returns/v1/services',
					'array' => true,
					'cardinality' => '1..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ReturnStatusInputType
	 * @param integer $index 
	 **/
	function getReturnStatus($index = null)
	{
		if ($index !== null)
		{
			return $this->ReturnStatus[$index];
		}
		else
		{
			return $this->ReturnStatus;
		}
	}

	/**
	 * @return void
	 * @param ReturnStatusInputType $value
	 * @param integer $index 
	 **/
	function setReturnStatus($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ReturnStatus[$index] = $value;
		}
		else
		{
			$this->ReturnStatus= $value;
		}
	}

	/**
	 * @return void
	 * @param ReturnStatusInputType $value
	 **/
	function addReturnStatus($value)
	{
		$this->ReturnStatus[] = $value;
	}

}
?>
