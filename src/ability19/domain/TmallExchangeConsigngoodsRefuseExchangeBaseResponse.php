<?php
namespace TaoBao\TopSdk\Ability19\Domain;

class TmallExchangeConsigngoodsRefuseExchangeBaseResponse {

    /**
        是否成功调用。
     **/
    public $success;

    /**
        换货单基本信息，按fields返回。
     **/
    public $exchange;

    /**
        返回结果说明。
     **/
    public $message;

    /**
        返回结果码。
     **/
    public $msg_code;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getExchange() : TmallExchangeConsigngoodsRefuseExchange{
        return $this->exchange;
    }

    public function setExchange(TmallExchangeConsigngoodsRefuseExchange $exchange){
        $this->exchange = $exchange;
    }

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


}

