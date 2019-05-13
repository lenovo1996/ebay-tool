<?php

require_once 'EbatNsReturnManagement_Logger.php';
require_once 'EbatNsReturnManagement_Session.php';
require_once 'EbatNsReturnManagement_ServiceProxy.php';
require_once 'BaseServiceResponse.php';
require_once 'AckValue.php';

/**
 * Prepares an environment for testing ebatNs calls
 *
 */
class EbatNsReturnManagement_Environment
{
    /**
     * @var EbatNsReturnManagement_Session
     */
    public $session;

    /**
     * @var EbatNsReturnManagement_Logger
     */
    public $logger = null;
    
    /**
     * @var EbatNsReturnManagement_ServiceProxy
     */
    public $proxy = null;
    
    /**
     * Fullpath to config-file
     *
     * @var string
     */
    public $configFile = null;
    
    public function __construct($logLevel = 0, $configFile = 'config/ebay.config.php')
    {
        $this->init($logLevel, $configFile);
    }
    
    public function init($logLevel = 0, $configFile)
    {
        if ($logLevel >= 1)
            $this->logger = new EbatNsReturnManagement_Logger();
        $this->configFile = $configFile;
        $this->session = new EbatNsReturnManagement_Session($this->configFile);
        $this->proxy = new EbatNsReturnManagement_ServiceProxy($this->session);
        
        if ($this->logger)
	        $this->proxy->attachLogger($this->logger);
    }
    
    public function dispatchCall()
    {
    }
    
    /**
     * Tests if a response is valid and prints out
     * a error trace if not
     *
     * @param BaseServiceResponse $res
     * @return boolean
     */
    public function testValid($res)
    {
        if ($res->getAck() == AckValue::CodeType_Success)
        {
            return true;
        }
        else
        {
            echo $this->proxy->getErrorsToString($res, true);
            return false;    
        }
    }
    
    public function dumpObject($data)
    {
        echo  "<br>---------------------<br>"
            . "Object Dump:<br><pre>" . print_r($data, true) . "</pre>";
    }
}
?>
