<?php

// $Id: EbatNs_CustomDataConverterUtf8.php,v 1.2 2013-08-08 15:46:27 michaelcoslar Exp $
// $Log: EbatNs_CustomDataConverterUtf8.php,v $

/**
 * EbatNsReturnManagement_CustomDataConverterUtf8.php
 * @package
 */

require_once 'EbatNsReturnManagement_DataConverter.php';

/**
 * EbatNsReturnManagement_CustomDataConverterUtf8
 *
 * Utf8 dtaconverter for EbatNs
 *
 * @package
 * @author michael
 * @copyright Copyright (c) 2008
 * @version $Id: EbatNs_CustomDataConverterUtf8.php,v 1.2 2013-08-08 15:46:27 michaelcoslar Exp $
 * @access public
 */
class EbatNsReturnManagement_CustomDataConverterUtf8 extends EbatNsReturnManagement_DataConverter
{
	/**
	 * EbatNsReturnManagement_CustomDataConverterUtf8::EbatNsReturnManagement_CustomDataConverterUtf8()
	 *
	 * Class constructor
	 *
	 */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * EbatNsReturnManagement_CustomDataConverterUtf8::decodeData()
	 *
	 * Decode the api data
	 *
	 * @param string $data data to decode
	 * @param string $type type of the data
	 * @return mixed decoded data
	 */
	function decodeData($data, $type = 'string')
	{
		switch ($type)
		{
			case 'dateTime':
				$dPieces = split('T', $data);
				$tPieces = split("\.", $dPieces[1]);
				$data = $dPieces[0] . ' ' . $tPieces[0];
					
				return $data;
					
				break;

			case 'boolean':
				if ($data == 'true')
					return true;
				else
					return null;
					
				break;
			
			default:
				return $data;	
		}
	}

	/**
	 * EbatNsReturnManagement_CustomDataConverterUtf8::encodeData()
	 *
	 * Encode the data for the api
	 *
	 * @param string $data data to encode
	 * @param string $type type of the data
	 * @param string $elementName name of the element
	 * @return string encoded data
	 */
	function encodeData($data, $type = 'string', $elementName = null)
	{
			switch ($type)
		{
			case 'dateTime':
				$time = strtotime($data);
				$data = date("Y-m-d\\TH:i:s.000\\Z", $time);
				break;

			case 'boolean':
			case 'int':
			case (substr($type, 0, -8) . 'CodeType'):
				break;
				
			default:
				if (is_string($data))
				{
					if (!in_array($elementName, array('Title', 'SubTitle')))
						$data = "<![CDATA[" . $data . "]]>";
				}

				break;
		}
		
		return $data;
	}
}
?>
