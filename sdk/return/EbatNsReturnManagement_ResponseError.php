<?php
// $Id: EbatNs_ResponseError.php,v 1.2 2008-06-05 08:21:06 michael Exp $
// $Log: EbatNs_ResponseError.php,v $

require_once 'BaseResponse.php';

class EbatNsReturnManagement_ResponseError extends BaseResponse
{
    function __construct ()
    {
        parent::__construct();
        $this->errorMessage = new ErrorMessage();
        $this->ack = 'Failure';
    }

    function raise ($msg, $code, $severity = 'Error', $errClass = 'SystemError')
    {
        $err = new ErrorData();
        $err->seterrorId($code);
        $err->setseverity($severity);
        $err->setmessage(htmlentities($msg));
        $err->setcategory($errClass);
        $this->_reduceElement($err);
        
        $this->errorMessage->adderror($err);
    }

    function getErrors ()
    {
        return $this->errorMessage->error;
    }

    function isGood ($onlyErrors = true)
    {
        if ($onlyErrors)
        {
            if (count($this->errorMessage->error))
                foreach ($this->errorMessage->error as $error)
                {
                    if ($error['severity'] ==
                         'Error')
                            return false;
                }
            return true;
        } else
            return (count($this->errorMessage->error) == 0);
    }

    public function _reduceElement (& $element)
    {
        foreach (get_object_vars($element) as $member => $value)
            if ($member[0] == '_' || ($value === null))
                unset($element->{$member});
        return count(get_object_vars($element)) > 0;
    }
}
?>
