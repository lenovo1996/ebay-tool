<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>SellerReturnProfile</b> container, which is used in an Add/Revise/Relist/Verify Trading API call to reference a Business Policies return policy profile. Business Policies return policy profiles contain detailed information on the seller's return policy, including the refund option and how many days the buyer has to return the item for a refund.
  * 
 **/

class SellerReturnProfileType extends EbatNs_ComplexType
{
	/**
	* @var long
	**/
	public $ReturnProfileID;

	/**
	* @var string
	**/
	public $ReturnProfileName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerReturnProfileType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ReturnProfileID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnProfileName' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return long
	 **/
	function getReturnProfileID()
	{
		return $this->ReturnProfileID;
	}

	/**
	 * @return void
	 **/
	function setReturnProfileID($value)
	{
		$this->ReturnProfileID = $value;
	}

	/**
	 * @return string
	 **/
	function getReturnProfileName()
	{
		return $this->ReturnProfileName;
	}

	/**
	 * @return void
	 **/
	function setReturnProfileName($value)
	{
		$this->ReturnProfileName = $value;
	}

}
?>
