<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'CategoryItemSpecificsType.php';

/**
  *         This is the base request type for the <b>GetCategorySpecifics</b> call. This call is used to retrieve recommended Item Specifics names and values for one or multiple eBay Categories.
  *       
 **/

class GetCategorySpecificsRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	public $CategoryID;

	/**
	* @var dateTime
	**/
	public $LastUpdateTime;

	/**
	* @var int
	**/
	public $MaxNames;

	/**
	* @var int
	**/
	public $MaxValuesPerName;

	/**
	* @var string
	**/
	public $Name;

	/**
	* @var CategoryItemSpecificsType
	**/
	public $CategorySpecific;

	/**
	* @var boolean
	**/
	public $ExcludeRelationships;

	/**
	* @var boolean
	**/
	public $IncludeConfidence;

	/**
	* @var boolean
	**/
	public $CategorySpecificsFileInfo;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetCategorySpecificsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'LastUpdateTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxNames' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxValuesPerName' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategorySpecific' =>
				array(
					'required' => false,
					'type' => 'CategoryItemSpecificsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ExcludeRelationships' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeConfidence' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategorySpecificsFileInfo' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	 * @param integer $index 
	 **/
	function getCategoryID($index = null)
	{
		if ($index !== null)
		{
			return $this->CategoryID[$index];
		}
		else
		{
			return $this->CategoryID;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setCategoryID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CategoryID[$index] = $value;
		}
		else
		{
			$this->CategoryID= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addCategoryID($value)
	{
		$this->CategoryID[] = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getLastUpdateTime()
	{
		return $this->LastUpdateTime;
	}

	/**
	 * @return void
	 **/
	function setLastUpdateTime($value)
	{
		$this->LastUpdateTime = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxNames()
	{
		return $this->MaxNames;
	}

	/**
	 * @return void
	 **/
	function setMaxNames($value)
	{
		$this->MaxNames = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxValuesPerName()
	{
		return $this->MaxValuesPerName;
	}

	/**
	 * @return void
	 **/
	function setMaxValuesPerName($value)
	{
		$this->MaxValuesPerName = $value;
	}

	/**
	 * @return string
	 **/
	function getName()
	{
		return $this->Name;
	}

	/**
	 * @return void
	 **/
	function setName($value)
	{
		$this->Name = $value;
	}

	/**
	 * @return CategoryItemSpecificsType
	 * @param integer $index 
	 **/
	function getCategorySpecific($index = null)
	{
		if ($index !== null)
		{
			return $this->CategorySpecific[$index];
		}
		else
		{
			return $this->CategorySpecific;
		}
	}

	/**
	 * @return void
	 * @param CategoryItemSpecificsType $value
	 * @param integer $index 
	 **/
	function setCategorySpecific($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CategorySpecific[$index] = $value;
		}
		else
		{
			$this->CategorySpecific= $value;
		}
	}

	/**
	 * @return void
	 * @param CategoryItemSpecificsType $value
	 **/
	function addCategorySpecific($value)
	{
		$this->CategorySpecific[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExcludeRelationships()
	{
		return $this->ExcludeRelationships;
	}

	/**
	 * @return void
	 **/
	function setExcludeRelationships($value)
	{
		$this->ExcludeRelationships = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeConfidence()
	{
		return $this->IncludeConfidence;
	}

	/**
	 * @return void
	 **/
	function setIncludeConfidence($value)
	{
		$this->IncludeConfidence = $value;
	}

	/**
	 * @return boolean
	 **/
	function getCategorySpecificsFileInfo()
	{
		return $this->CategorySpecificsFileInfo;
	}

	/**
	 * @return void
	 **/
	function setCategorySpecificsFileInfo($value)
	{
		$this->CategorySpecificsFileInfo = $value;
	}

}
?>
