<?php
namespace TaoBao\TopSdk\Ability19\Domain;

class TmallExchangeConsigngoodsExchange {

    /**
        modified
     **/
    public $modified;

    /**
        status
     **/
    public $status;

    /**
        bizOrderId
     **/
    public $biz_order_id;

    /**
        disputeId
     **/
    public $dispute_id;

    /**
        极速换货标识，1=极速换货，0=普通换货；通过fields按需返回，历史淘宝普通换货兼容链路可能不返回。
     **/
    public $speed_exchange;


    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getBizOrderId() : string{
        return $this->biz_order_id;
    }

    public function setBizOrderId(string $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getDisputeId() : string{
        return $this->dispute_id;
    }

    public function setDisputeId(string $disputeId){
        $this->dispute_id = $disputeId;
    }

    public function getSpeedExchange() : int{
        return $this->speed_exchange;
    }

    public function setSpeedExchange(int $speedExchange){
        $this->speed_exchange = $speedExchange;
    }


}

