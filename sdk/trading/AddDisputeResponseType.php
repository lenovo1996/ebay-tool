<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'DisputeIDType.php';

/**
  * Type defining the response of the <b>AddDispute</b> call. Upon a successful call, the response contains a newly created <b>DisputeID</b> value, which confirms that an Unpaid Item case was created, or that a single line item order was successfully cancelled.
  * 
 **/

class AddDisputeResponseType extends AbstractResponseType
{
	/**
	* @var DisputeIDType
	**/
	public $DisputeID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddDisputeResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DisputeID' =>
				array(
					'required' => false,
					'type' => 'DisputeIDType',
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
	 * @return DisputeIDType
	 **/
	function getDisputeID()
	{
		return $this->DisputeID;
	}

	/**
	 * @return void
	 **/
	function setDisputeID($value)
	{
		$this->DisputeID = $value;
	}

}
?>
