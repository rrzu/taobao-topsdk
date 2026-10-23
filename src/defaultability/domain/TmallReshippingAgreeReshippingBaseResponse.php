<?php
namespace TaoBao\TopSdk\Defaultability\Domain;

class TmallReshippingAgreeReshippingBaseResponse {

    /**
        返回结果说明
     **/
    public $message;

    /**
        返回结果码
     **/
    public $msg_code;

    /**
        是否成功调用
     **/
    public $success;

    /**
        补寄单信息
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

    public function getReshipping() : TmallReshippingAgreeReshipping{
        return $this->reshipping;
    }

    public function setReshipping(TmallReshippingAgreeReshipping $reshipping){
        $this->reshipping = $reshipping;
    }


}

