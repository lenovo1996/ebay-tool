<?php
/* Generated on 4/20/19 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'MyMessagesFolderOperationCodeType.php';

/**
  * This call can be used to add, remove, or rename a custom folder in <b>My eBay Messages</b>. Note that the Inbox and Sent folders cannot be removed or renamed in <b>My eBay Messages</b>.
  * <br/><br/>
  * A user can have up to 10 custom folders in <b>My eBay Messages</b>, and it is possible to add, remove, or rename up to 10 custom folders with one <b>ReviseMyMessagesFolders</b> call
  * 
 **/

class ReviseMyMessagesFoldersRequestType extends AbstractRequestType
{
	/**
	* @var MyMessagesFolderOperationCodeType
	**/
	public $Operation;

	/**
	* @var long
	**/
	public $FolderID;

	/**
	* @var string
	**/
	public $FolderName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReviseMyMessagesFoldersRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Operation' =>
				array(
					'required' => false,
					'type' => 'MyMessagesFolderOperationCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FolderID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'FolderName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return MyMessagesFolderOperationCodeType
	 **/
	function getOperation()
	{
		return $this->Operation;
	}

	/**
	 * @return void
	 **/
	function setOperation($value)
	{
		$this->Operation = $value;
	}

	/**
	 * @return long
	 * @param integer $index 
	 **/
	function getFolderID($index = null)
	{
		if ($index !== null)
		{
			return $this->FolderID[$index];
		}
		else
		{
			return $this->FolderID;
		}
	}

	/**
	 * @return void
	 * @param long $value
	 * @param integer $index 
	 **/
	function setFolderID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->FolderID[$index] = $value;
		}
		else
		{
			$this->FolderID= $value;
		}
	}

	/**
	 * @return void
	 * @param long $value
	 **/
	function addFolderID($value)
	{
		$this->FolderID[] = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getFolderName($index = null)
	{
		if ($index !== null)
		{
			return $this->FolderName[$index];
		}
		else
		{
			return $this->FolderName;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setFolderName($value, $index = null)
	{
		if ($index !== null)
		{
			$this->FolderName[$index] = $value;
		}
		else
		{
			$this->FolderName= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addFolderName($value)
	{
		$this->FolderName[] = $value;
	}

}
?>
