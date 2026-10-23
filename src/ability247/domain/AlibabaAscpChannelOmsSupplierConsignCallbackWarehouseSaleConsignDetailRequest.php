<?php
namespace TaoBao\TopSdk\Ability247\Domain;

class AlibabaAscpChannelOmsSupplierConsignCallbackWarehouseSaleConsignDetailRequest {

    /**
        包裹明细发货数量
     **/
    public $quantity;

    /**
        包裹明细缺货数量
     **/
    public $lack_quantity;

    /**
        商家ERP子单号
     **/
    public $out_sub_order_code;

    /**
        包裹明细对应子单号，根据订单类型orderType使用不同子单号。
     **/
    public $biz_order_detail_code;

    /**
        包裹明细SN编码列表
     **/
    public $serial_number_list;

    /**
        包裹明细货品ID
     **/
    public $sc_item_id;

    /**
        包裹明细扩展字段
     **/
    public $feature_map;


    public function getQuantity() : string{
        return $this->quantity;
    }

    public function setQuantity(string $quantity){
        $this->quantity = $quantity;
    }

    public function getLackQuantity() : string{
        return $this->lack_quantity;
    }

    public function setLackQuantity(string $lackQuantity){
        $this->lack_quantity = $lackQuantity;
    }

    public function getOutSubOrderCode() : string{
        return $this->out_sub_order_code;
    }

    public function setOutSubOrderCode(string $outSubOrderCode){
        $this->out_sub_order_code = $outSubOrderCode;
    }

    public function getBizOrderDetailCode() : string{
        return $this->biz_order_detail_code;
    }

    public function setBizOrderDetailCode(string $bizOrderDetailCode){
        $this->biz_order_detail_code = $bizOrderDetailCode;
    }

    public function getSerialNumberList() : array{
        return $this->serial_number_list;
    }

    public function setSerialNumberList(array $serialNumberList){
        $this->serial_number_list = $serialNumberList;
    }

    public function getScItemId() : string{
        return $this->sc_item_id;
    }

    public function setScItemId(string $scItemId){
        $this->sc_item_id = $scItemId;
    }

    public function getFeatureMap() : array{
        return $this->feature_map;
    }

    public function setFeatureMap(array $featureMap){
        $this->feature_map = $featureMap;
    }


}

