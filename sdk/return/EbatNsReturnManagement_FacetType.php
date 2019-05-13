<?php
// $Id: EbatNsReturnManagement_FacetType.php,v 1.2 2008-06-05 08:21:06 michael Exp $
// $Log: EbatNsReturnManagement_FacetType.php,v $

require_once 'EbatNsReturnManagement_SimpleType.php';

class EbatNsReturnManagement_FacetType extends EbatNsReturnManagement_SimpleType
{
    function __construct ($name, $nsURI)
    {
        parent::__construct($name, $nsURI);
    }
    
    /**
     * Just for a compatibility issue we mimik the 
     * PHP4 access via a property. Anyway the return is not
     * checked on valid input.
     *
     * @param string $name
     * @return string
     */
    function __get($name)
    {
        trigger_error("Property Style access to FacetTypes is deprecated and replaced by constants in PHP5.", E_USER_NOTICE);
        return $name;
    }
}
?>
