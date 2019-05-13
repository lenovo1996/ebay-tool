<?php
/* Generated on 5/7/15 1:17 PM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'BaseResponse.php';
require_once 'ActivityOptionType.php';

/**
  *   Type defining the <b>getActivityOptions</b> response. The seller's possible 
  *   next step(s) is returned in <b>activityOptions</b> field. Consumers of this 
  *   service can map the activity to the corresponding Return Management API call.
  *   
 **/

class GetActivityOptionsResponse extends BaseResponse
{
	/**
	* @var ActivityOptionType
	**/
	public $activityOptions;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetActivityOptionsResponse', 'http://www.ebay.com/marketplace/returns/v1/services');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'activityOptions' =>
				array(
					'required' => false,
					'type' => 'ActivityOptionType',
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
	 * @return ActivityOptionType
	 * @param integer $index 
	 **/
	function getactivityOptions($index = null)
	{
		if ($index !== null)
		{
			return $this->activityOptions[$index];
		}
		else
		{
			return $this->activityOptions;
		}
	}

	/**
	 * @return void
	 * @param ActivityOptionType $value
	 * @param integer $index 
	 **/
	function setactivityOptions($value, $index = null)
	{
		if ($index !== null)
		{
			$this->activityOptions[$index] = $value;
		}
		else
		{
			$this->activityOptions= $value;
		}
	}

	/**
	 * @return void
	 * @param ActivityOptionType $value
	 **/
	function addactivityOptions($value)
	{
		$this->activityOptions[] = $value;
	}

}
?>
