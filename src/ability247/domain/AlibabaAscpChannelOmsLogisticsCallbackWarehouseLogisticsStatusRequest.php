<?php
namespace TaoBao\TopSdk\Ability247\Domain;

class AlibabaAscpChannelOmsLogisticsCallbackWarehouseLogisticsStatusRequest {

    /**
        订单类型。1:渠道分销单，20: 物流LP
     **/
    public $order_type;

    /**
        操作时间。yyyy-mm-dd HH:mm:ss
     **/
    public $operate_time;

    /**
        单号，根据订单类型orderType使用不同单号。
     **/
    public $biz_order_code;

    /**
        扩展字段
     **/
    public $feature_map;

    /**
        物流状态
     **/
    public $status;


    public function getOrderType() : string{
        return $this->order_type;
    }

    public function setOrderType(string $orderType){
        $this->order_type = $orderType;
    }

    public function getOperateTime() : string{
        return $this->operate_time;
    }

    public function setOperateTime(string $operateTime){
        $this->operate_time = $operateTime;
    }

    public function getBizOrderCode() : string{
        return $this->biz_order_code;
    }

    public function setBizOrderCode(string $bizOrderCode){
        $this->biz_order_code = $bizOrderCode;
    }

    public function getFeatureMap() : array{
        return $this->feature_map;
    }

    public function setFeatureMap(array $featureMap){
        $this->feature_map = $featureMap;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }


}

