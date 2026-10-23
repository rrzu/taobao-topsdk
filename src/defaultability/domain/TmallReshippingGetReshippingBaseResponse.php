<?php
namespace TaoBao\TopSdk\Defaultability\Domain;

class TmallReshippingGetReshippingBaseResponse {

    /**
        错误信息说明
     **/
    public $message;

    /**
        错误码
     **/
    public $msg_code;

    /**
        返回结果是否符合要求
     **/
    public $success;

    /**
        补寄单详情
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

    public function getReshipping() : TmallReshippingGetReshipping{
        return $this->reshipping;
    }

    public function setReshipping(TmallReshippingGetReshipping $reshipping){
        $this->reshipping = $reshipping;
    }


}

