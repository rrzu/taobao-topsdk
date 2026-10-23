<?php
namespace TaoBao\TopSdk\Defaultability\Domain;

class TaobaoItemsSellerListGetDeliveryTime {

    /**
        sku时间
     **/
    public $skus_delivery_time_list;

    /**
        商品级别的发货时间
     **/
    public $delivery_time;

    /**
        发货时间类型：相对发货时间、固定发货时间
     **/
    public $delivery_time_type;

    /**
        是否设置了发货时间：未设置、商品维度、sku维度
     **/
    public $need_delivery_time;


    public function getSkusDeliveryTimeList() : array{
        return $this->skus_delivery_time_list;
    }

    public function setSkusDeliveryTimeList(array $skusDeliveryTimeList){
        $this->skus_delivery_time_list = $skusDeliveryTimeList;
    }

    public function getDeliveryTime() : string{
        return $this->delivery_time;
    }

    public function setDeliveryTime(string $deliveryTime){
        $this->delivery_time = $deliveryTime;
    }

    public function getDeliveryTimeType() : string{
        return $this->delivery_time_type;
    }

    public function setDeliveryTimeType(string $deliveryTimeType){
        $this->delivery_time_type = $deliveryTimeType;
    }

    public function getNeedDeliveryTime() : string{
        return $this->need_delivery_time;
    }

    public function setNeedDeliveryTime(string $needDeliveryTime){
        $this->need_delivery_time = $needDeliveryTime;
    }


}

