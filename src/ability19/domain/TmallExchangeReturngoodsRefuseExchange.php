<?php
namespace TaoBao\TopSdk\Ability19\Domain;

class TmallExchangeReturngoodsRefuseExchange {

    /**
        当前换货状态
     **/
    public $status;

    /**
        换货流程最新修改时间
     **/
    public $modified;

    /**
        换货单号ID
     **/
    public $dispute_id;

    /**
        正向交易单号ID
     **/
    public $biz_order_id;

    /**
        极速换货标识，1=极速换货；极速换货成功响应固定返回1，无需fields参数。
     **/
    public $speed_exchange;


    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getDisputeId() : string{
        return $this->dispute_id;
    }

    public function setDisputeId(string $disputeId){
        $this->dispute_id = $disputeId;
    }

    public function getBizOrderId() : string{
        return $this->biz_order_id;
    }

    public function setBizOrderId(string $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getSpeedExchange() : int{
        return $this->speed_exchange;
    }

    public function setSpeedExchange(int $speedExchange){
        $this->speed_exchange = $speedExchange;
    }


}

