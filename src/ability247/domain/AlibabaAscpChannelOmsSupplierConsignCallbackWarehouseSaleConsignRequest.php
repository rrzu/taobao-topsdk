<?php
namespace TaoBao\TopSdk\Ability247\Domain;

class AlibabaAscpChannelOmsSupplierConsignCallbackWarehouseSaleConsignRequest {

    /**
        订单类型。1:渠道分销单，20: 物流LP
     **/
    public $order_type;

    /**
        商家ERP单号
     **/
    public $out_order_code;

    /**
        业务请求ID，幂等用，请保持唯一
     **/
    public $biz_request_id;

    /**
        包裹列表
     **/
    public $package_list;

    /**
        发货人信息
     **/
    public $sender_info;

    /**
        子单列表
     **/
    public $detail_list;

    /**
        单号，根据订单类型orderType使用不同单号。
     **/
    public $biz_order_code;

    /**
        仓名称
     **/
    public $store_name;

    /**
        主单扩展字段
     **/
    public $feature_map;

    /**
        仓编码
     **/
    public $store_code;


    public function getOrderType() : string{
        return $this->order_type;
    }

    public function setOrderType(string $orderType){
        $this->order_type = $orderType;
    }

    public function getOutOrderCode() : string{
        return $this->out_order_code;
    }

    public function setOutOrderCode(string $outOrderCode){
        $this->out_order_code = $outOrderCode;
    }

    public function getBizRequestId() : string{
        return $this->biz_request_id;
    }

    public function setBizRequestId(string $bizRequestId){
        $this->biz_request_id = $bizRequestId;
    }

    public function getPackageList() : array{
        return $this->package_list;
    }

    public function setPackageList(array $packageList){
        $this->package_list = $packageList;
    }

    public function getSenderInfo() : AlibabaAscpChannelOmsSupplierConsignCallbackWarehouseSaleConsignSenderInfo{
        return $this->sender_info;
    }

    public function setSenderInfo(AlibabaAscpChannelOmsSupplierConsignCallbackWarehouseSaleConsignSenderInfo $senderInfo){
        $this->sender_info = $senderInfo;
    }

    public function getDetailList() : array{
        return $this->detail_list;
    }

    public function setDetailList(array $detailList){
        $this->detail_list = $detailList;
    }

    public function getBizOrderCode() : string{
        return $this->biz_order_code;
    }

    public function setBizOrderCode(string $bizOrderCode){
        $this->biz_order_code = $bizOrderCode;
    }

    public function getStoreName() : string{
        return $this->store_name;
    }

    public function setStoreName(string $storeName){
        $this->store_name = $storeName;
    }

    public function getFeatureMap() : array{
        return $this->feature_map;
    }

    public function setFeatureMap(array $featureMap){
        $this->feature_map = $featureMap;
    }

    public function getStoreCode() : string{
        return $this->store_code;
    }

    public function setStoreCode(string $storeCode){
        $this->store_code = $storeCode;
    }


}

