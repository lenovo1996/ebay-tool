<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'FeesType.php';
require_once 'SellingManagerProductDetailsType.php';

/**
  * Returns the template ID and the estimated fees for the revised listing.
  * 
 **/

class ReviseSellingManagerTemplateResponseType extends AbstractResponseType
{
	/**
	* @var long
	**/
	public $SaleTemplateID;

	/**
	* @var FeesType
	**/
	public $Fees;

	/**
	* @var string
	**/
	public $CategoryID;

	/**
	* @var string
	**/
	public $Category2ID;

	/**
	* @var boolean
	**/
	public $VerifyOnly;

	/**
	* @var string
	**/
	public $SaleTemplateName;

	/**
	* @var SellingManagerProductDetailsType
	**/
	public $SellingManagerProductDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReviseSellingManagerTemplateResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SaleTemplateID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Fees' =>
				array(
					'required' => false,
					'type' => 'FeesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Category2ID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VerifyOnly' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SaleTemplateName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellingManagerProductDetails' =>
				array(
					'required' => false,
					'type' => 'SellingManagerProductDetailsType',
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
	 * @return long
	 **/
	function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}

	/**
	 * @return void
	 **/
	function setSaleTemplateID($value)
	{
		$this->SaleTemplateID = $value;
	}

	/**
	 * @return FeesType
	 **/
	function getFees()
	{
		return $this->Fees;
	}

	/**
	 * @return void
	 **/
	function setFees($value)
	{
		$this->Fees = $value;
	}

	/**
	 * @return string
	 **/
	function getCategoryID()
	{
		return $this->CategoryID;
	}

	/**
	 * @return void
	 **/
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}

	/**
	 * @return string
	 **/
	function getCategory2ID()
	{
		return $this->Category2ID;
	}

	/**
	 * @return void
	 **/
	function setCategory2ID($value)
	{
		$this->Category2ID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getVerifyOnly()
	{
		return $this->VerifyOnly;
	}

	/**
	 * @return void
	 **/
	function setVerifyOnly($value)
	{
		$this->VerifyOnly = $value;
	}

	/**
	 * @return string
	 **/
	function getSaleTemplateName()
	{
		return $this->SaleTemplateName;
	}

	/**
	 * @return void
	 **/
	function setSaleTemplateName($value)
	{
		$this->SaleTemplateName = $value;
	}

	/**
	 * @return SellingManagerProductDetailsType
	 **/
	function getSellingManagerProductDetails()
	{
		return $this->SellingManagerProductDetails;
	}

	/**
	 * @return void
	 **/
	function setSellingManagerProductDetails($value)
	{
		$this->SellingManagerProductDetails = $value;
	}

}
?>
