<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'SellingManagerVendorDetailsType.php';

/**
  * Returned if the user is a Selling Manager user. Defines product information for Selling Manager users.
  * 
 **/

class SellingManagerProductDetailsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	public $ProductName;

	/**
	* @var long
	**/
	public $ProductID;

	/**
	* @var string
	**/
	public $CustomLabel;

	/**
	* @var int
	**/
	public $QuantityAvailable;

	/**
	* @var AmountType
	**/
	public $UnitCost;

	/**
	* @var long
	**/
	public $FolderID;

	/**
	* @var boolean
	**/
	public $RestockAlert;

	/**
	* @var int
	**/
	public $RestockThreshold;

	/**
	* @var SellingManagerVendorDetailsType
	**/
	public $VendorInfo;

	/**
	* @var string
	**/
	public $Note;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerProductDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ProductName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CustomLabel' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityAvailable' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UnitCost' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FolderID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RestockAlert' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RestockThreshold' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VendorInfo' =>
				array(
					'required' => false,
					'type' => 'SellingManagerVendorDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Note' =>
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
	 * @return string
	 **/
	function getProductName()
	{
		return $this->ProductName;
	}

	/**
	 * @return void
	 **/
	function setProductName($value)
	{
		$this->ProductName = $value;
	}

	/**
	 * @return long
	 **/
	function getProductID()
	{
		return $this->ProductID;
	}

	/**
	 * @return void
	 **/
	function setProductID($value)
	{
		$this->ProductID = $value;
	}

	/**
	 * @return string
	 **/
	function getCustomLabel()
	{
		return $this->CustomLabel;
	}

	/**
	 * @return void
	 **/
	function setCustomLabel($value)
	{
		$this->CustomLabel = $value;
	}

	/**
	 * @return int
	 **/
	function getQuantityAvailable()
	{
		return $this->QuantityAvailable;
	}

	/**
	 * @return void
	 **/
	function setQuantityAvailable($value)
	{
		$this->QuantityAvailable = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getUnitCost()
	{
		return $this->UnitCost;
	}

	/**
	 * @return void
	 **/
	function setUnitCost($value)
	{
		$this->UnitCost = $value;
	}

	/**
	 * @return long
	 **/
	function getFolderID()
	{
		return $this->FolderID;
	}

	/**
	 * @return void
	 **/
	function setFolderID($value)
	{
		$this->FolderID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getRestockAlert()
	{
		return $this->RestockAlert;
	}

	/**
	 * @return void
	 **/
	function setRestockAlert($value)
	{
		$this->RestockAlert = $value;
	}

	/**
	 * @return int
	 **/
	function getRestockThreshold()
	{
		return $this->RestockThreshold;
	}

	/**
	 * @return void
	 **/
	function setRestockThreshold($value)
	{
		$this->RestockThreshold = $value;
	}

	/**
	 * @return SellingManagerVendorDetailsType
	 **/
	function getVendorInfo()
	{
		return $this->VendorInfo;
	}

	/**
	 * @return void
	 **/
	function setVendorInfo($value)
	{
		$this->VendorInfo = $value;
	}

	/**
	 * @return string
	 **/
	function getNote()
	{
		return $this->Note;
	}

	/**
	 * @return void
	 **/
	function setNote($value)
	{
		$this->Note = $value;
	}

}
?>
