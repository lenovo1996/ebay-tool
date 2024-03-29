<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type was replaced by <b>ListingRecommendationType</b>
  * 
 **/

class RecommendationType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	public $FieldGroup;

	/**
	* @var string
	**/
	public $FieldName;

	/**
	* @var string
	**/
	public $RecommendationCode;

	/**
	* @var string
	**/
	public $RecommendedValue;

	/**
	* @var string
	**/
	public $Message;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RecommendationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'FieldGroup' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FieldName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RecommendationCode' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RecommendedValue' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'Message' =>
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
	function getFieldGroup()
	{
		return $this->FieldGroup;
	}

	/**
	 * @return void
	 **/
	function setFieldGroup($value)
	{
		$this->FieldGroup = $value;
	}

	/**
	 * @return string
	 **/
	function getFieldName()
	{
		return $this->FieldName;
	}

	/**
	 * @return void
	 **/
	function setFieldName($value)
	{
		$this->FieldName = $value;
	}

	/**
	 * @return string
	 **/
	function getRecommendationCode()
	{
		return $this->RecommendationCode;
	}

	/**
	 * @return void
	 **/
	function setRecommendationCode($value)
	{
		$this->RecommendationCode = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getRecommendedValue($index = null)
	{
		if ($index !== null)
		{
			return $this->RecommendedValue[$index];
		}
		else
		{
			return $this->RecommendedValue;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setRecommendedValue($value, $index = null)
	{
		if ($index !== null)
		{
			$this->RecommendedValue[$index] = $value;
		}
		else
		{
			$this->RecommendedValue= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addRecommendedValue($value)
	{
		$this->RecommendedValue[] = $value;
	}

	/**
	 * @return string
	 **/
	function getMessage()
	{
		return $this->Message;
	}

	/**
	 * @return void
	 **/
	function setMessage($value)
	{
		$this->Message = $value;
	}

}
?>
