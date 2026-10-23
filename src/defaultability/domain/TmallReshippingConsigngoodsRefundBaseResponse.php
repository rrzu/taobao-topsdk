<?php
namespace TaoBao\TopSdk\Defaultability\Domain;

class TmallReshippingConsigngoodsRefundBaseResponse {

    /**
        message
     **/
    public $message;

    /**
        msgCode
     **/
    public $msg_code;

    /**
        success
     **/
    public $success;

    /**
        reshipping
     **/
    public $reshipping;


    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getMsgCode() : string{
        return $this->msg_code;
    }

    public function setMsgCode(string $msgCode){
        $this->msg_code = $msgCode;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getReshipping() : TmallReshippingConsigngoodsReshipping{
        return $this->reshipping;
    }

    public function setReshipping(TmallReshippingConsigngoodsReshipping $reshipping){
        $this->reshipping = $reshipping;
    }


}

