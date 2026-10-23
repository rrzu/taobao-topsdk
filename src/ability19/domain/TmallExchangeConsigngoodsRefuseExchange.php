<?php
namespace TaoBao\TopSdk\Ability19\Domain;

class TmallExchangeConsigngoodsRefuseExchange {

    /**
        正向交易单号，fields中使用bizorder_id选择。
     **/
    public $biz_order_id;

    /**
        换货单号，按fields返回。
     **/
    public $dispute_id;

    /**
        换货单修改时间，按fields返回。
     **/
    public $modified;

    /**
        极速换货标识，通过fields选择后返回1。
     **/
    public $speed_exchange;

    /**
        当前换货状态的中文描述，按fields返回。
     **/
    public $status;


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

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getSpeedExchange() : int{
        return $this->speed_exchange;
    }

    public function setSpeedExchange(int $speedExchange){
        $this->speed_exchange = $speedExchange;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }


}

