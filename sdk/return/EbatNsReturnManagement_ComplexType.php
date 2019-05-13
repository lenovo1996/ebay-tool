<?php
// $Id: EbatNsReturnManagement_ComplexType.php,v 1.2 2013-04-05 11:15:52 thomasbiniasch Exp $
// $Log: EbatNsReturnManagement_ComplexType.php,v $

require_once 'EbatNsReturnManagement_SimpleType.php';

class EbatNsReturnManagement_ComplexType extends EbatNsReturnManagement_SimpleType
{ 
	// an array of SimpleTypes / ComplexTypes  (child-elements)
	// now this static array will hold the complete schema information for any
	// element-class where an object is created !
	public static $_elements = array();
	// will define wheather the data is stored in the value-field (as a assoc array)
	// or either in Members of an object
	public $_dataInValueArray = false;

	function __construct( $name, $nsURI )
	{
		self::$_elements[__CLASS__] = array();
	    parent::__construct($name, $nsURI);
	} 
	
	// will serialize the given value
	// and return XML-data.
	// give preserveNull = true to enforce serialization of values that evaluate to false (null or 0 or '')
	// we assume a value also as empty if the any child elements will not return any data.
	function serialize( $elementName, $value, $attributeValues, $preserveNull, $typeName, $dataConverter )
	{ 
		$ret = '';
		// lets decide where we are getting the data from
		if ( $this->_dataInValueArray )
		{
			$ret = '';
			foreach ( $value as $key => $data )
			{
				if ( isset( $data->attributeValues ) )
					$attributeValues = $data->attributeValues;
				else
					$attributeValues = null;

				if ( $data instanceof EbatNsReturnManagement_SimpleType )
				{
					$ret .= $data->serialize( $key, $data, $attributeValues, $preserveNull, null, $dataConverter );
				} 
				else
					$ret .= EbatNsReturnManagement_SimpleType::serialize( $key, $data, $attributeValues, $preserveNull, null, $dataConverter );
			} 
		} 
		else
		{
			if ( count( $this->getMetaDataElements() ) == 0 )
			{
				$ret = $this->value;
			} 
			else
				foreach ( $this->getMetaDataElements() as $childElementName => $childTypeInfo )
			{
				$childValue = $this->
				{
					$childElementName} ;
				if ( isset( $childTypeInfo['type'] ) )
					$childType = $childTypeInfo['type'];
				else
					$childType = null;

				if ( is_array( $childValue ) )
				{
					$needArraySurrounding = null;
					foreach ( $childValue as $arrayElementValue )
					{
						if ( isset( $arrayElementValue->attributeValues ) )
							$childAttributeValues = $arrayElementValue->attributeValues;
						else
							$childAttributeValues = null;

						if ( $childValue instanceof  EbatNsReturnManagement_SimpleType )
						{ 
							$ret .= $childValue->serialize( $childElementName, $arrayElementValue, $childAttributeValues, $preserveNull, $childType, $dataConverter ); 
						} 
						else
						{ 
							if (is_object($arrayElementValue))
							{
								// hack to guess the original element name out of
								// the class-name of the array-element
								if (!$childTypeInfo['array'])
								{
									list($questedName) = explode('Type', get_class($arrayElementValue));
									$needArraySurrounding = $childElementName;	 
									$ret .= $arrayElementValue->serialize( $questedName, $arrayElementValue, $childAttributeValues, $preserveNull, $childType, $dataConverter ) ;
								}
								else
								{
									$ret .= $arrayElementValue->serialize( $childElementName, $arrayElementValue, $childAttributeValues, $preserveNull, $childType, $dataConverter );
								}
							}
							else
								$ret .= EbatNsReturnManagement_SimpleType::serialize( $childElementName, $arrayElementValue, $childAttributeValues, $preserveNull, $childType, $dataConverter );
						} 
					}
					
					if ($needArraySurrounding !== null)
					{
						$ret = '<' . $needArraySurrounding . '>' . $ret . '</' . $needArraySurrounding . '>';
					}
				}  
				else
				{
					if ( isset( $childValue->attributeValues ) )
						$childAttributeValues = $childValue->attributeValues;
					else
						$childAttributeValues = null;

					if ( $childValue instanceof EbatNsReturnManagement_SimpleType )
					{ 
						$ret .= $childValue->serialize( $childElementName, $childValue, $childAttributeValues, $preserveNull, $childType, $dataConverter ); 
					} 
					else
					{ 
						$ret .= EbatNsReturnManagement_SimpleType::serialize( $childElementName, $childValue, $childAttributeValues, $preserveNull, $childType, $dataConverter );
					} 
				} // plain
			} 
		} 
		$ret = '<' . $elementName . $this->_getAttributeString( $attributeValues ) . '>' . $ret . '</' . $elementName . '>';
		return $ret;
	} 

	/**
     * Do not use anymore
     *
     * @deprecated 
     */
    public function unsetMetaData($class = null)
    {
        if ($class === null)
            $class = get_class($this);
        parent::unsetMetaData();
        unset($this->_elements[$class]);
    }
    
    public function getMetaDataElements($class = null)
    {
       if ($class === null)
            $class = get_class($this);
        return self::$_elements[$class];
    }
    
    public function addMetaDataElement($elementName, $metaData, $class = null)
    {
        if ($class === null)
            $class = get_class($this);
        self::$_elements[$class][$elementName] = $metaData;        
    }
} 
?>
