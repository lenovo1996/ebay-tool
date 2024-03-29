<?php

// $Id: EbatNs_DataConverter.php,v 1.2 2008-06-05 08:21:06 michael Exp $
// $Log: EbatNs_DataConverter.php,v $

class EbatNsReturnManagement_DataConverter
{
    public $options = array();

    function __construct ()
    {
    }

    function decodeData ($data, $type = 'string')
    {
        switch ($type)
        {
            case 'boolean':
                if ($data == 'true')
                    return true; else
                    return null;
        }
        return $data;
    }

    function encodeData ($data, $type = 'string', $elementName = null)
    {
        return ("<![CDATA[" . $data . "]]>");
    }

    function encryptData ($data, $type = null)
    {
        return $data;
    }

    function decryptData ($data, $type = null)
    {
        return $data;
    }
}

class EbatNsReturnManagement_DataConverterUtf8 extends EbatNsReturnManagement_DataConverter
{
    function __construct ()
    {
        parent::__construct();
    }
}

class EbatNsReturnManagement_DataConverterIso extends EbatNsReturnManagement_DataConverter
{
    function __construct ()
    {
        parent::__construct();
    }

    function decodeData ($data, $type = 'string')
    {
        switch ($type)
        {
            case 'string':
                return utf8_decode($data);
            case 'dateTime':
                {
//                  $dPieces = split('T', $data);
//                  $tPieces = split("\.", $dPieces[1]);
                    $dPieces = explode('T', $data);
                    $tPieces = explode("\.", $dPieces[1]);
                    $data = $dPieces[0] . ' ' . $tPieces[0];
                    // return date('Y-m-d H:i:s', strtotime($data) + date('Z'));
                    return $data;
                }
            case 'boolean':
                if ($data == 'true')
                    return true; else
                    return null;
            default:
                return $data;
        }
    }

    function encodeData ($data, $type = 'string', $elementName = null)
    {
        switch ($type)
        {
            case 'dateTime':
                $time = strtotime($data);
                $data = date("Y-m-d\\TH:i:s.000\\Z", $time);
                break;

            case 'boolean':
            case 'int':
            case (substr($type, 0, - 8) . 'CodeType'):
                break;

            default:
                if (is_string($data))
                    $data = "<![CDATA[" . utf8_encode($data) . "]]>";
                break;
        }

        return $data;
    }
}
?>
