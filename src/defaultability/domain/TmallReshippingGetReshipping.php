<?php
namespace TaoBao\TopSdk\Defaultability\Domain;

class TmallReshippingGetReshipping {

    /**
        主订单号ID
     **/
    public $alipay_no;

    /**
        补寄理由说明
     **/
    public $desc;

    /**
        补寄申请理由
     **/
    public $reason;

    /**
        attributes
     **/
    public $attributes;

    /**
        申请补寄的状态：售中 or 售后
     **/
    public $refund_phase;

    /**
        buyerAddress
     **/
    public $buyer_address;

    /**
        操作场景
     **/
    public $operation_contraint;

    /**
        商品名称
     **/
    public $title;

    /**
        补寄单创建时间
     **/
    public $created;

    /**
        卖家昵称
     **/
    public $seller_nick;

    /**
        先行垫付状态
     **/
    public $advance_status;

    /**
        买家昵称
     **/
    public $buyer_nick;

    /**
        补寄状态，具体包括：补寄待处理(WAIT_SELLER_AGREE), 等待卖家发货(WAIT_SELLER_SEND_GOODS), 等待买家收货(WAIT_BUYER_CONFIRM_REDO_SEND_GOODS), 补寄成功(SUCCESS), 卖家拒绝补寄(SELLER_REFUSE_BUYER), 补寄关闭(CLOSED), 转退款(EXCHANGE_TRANSFORM_TO_REFUND)
     **/
    public $status;

    /**
        补寄版本
     **/
    public $refund_version;

    /**
        卖家发货物流公司名称
     **/
    public $seller_logistic_name;

    /**
        所购买的商品sku，补寄商品需找买家确认
     **/
    public $bought_sku;

    /**
        补寄单修改时间
     **/
    public $modified;

    /**
        补寄单号ID
     **/
    public $dispute_id;

    /**
        补寄数量
     **/
    public $num;

    /**
        卖家发货快递单号
     **/
    public $seller_logistic_no;

    /**
        价格
     **/
    public $price;

    /**
        超时时间
     **/
    public $time_out;

    /**
        小二托管状态
     **/
    public $cs_status;

    /**
        商品状态
     **/
    public $good_status;

    /**
        正向订单号ID
     **/
    public $biz_order_id;

    /**
        收件人ID (Open Addressee ID)，长度在128个字符之内。
     **/
    public $oaid;

    /**
        买家openId
     **/
    public $buyer_open_uid;

    /**
        所购买的修改后商品sku，补寄商品需找买家确认
     **/
    public $new_bought_sku;

    /**
        收件人淘宝加密openId
     **/
    public $real_receiver_open_id;

    /**
        收件人淘宝加密昵称
     **/
    public $real_receiver_display_nick;

    /**
        买家联系方式
     **/
    public $buyer_phone;

    /**
        buyerName
     **/
    public $buyer_name;


    public function getAlipayNo() : string{
        return $this->alipay_no;
    }

    public function setAlipayNo(string $alipayNo){
        $this->alipay_no = $alipayNo;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }

    public function getAttributes() : string{
        return $this->attributes;
    }

    public function setAttributes(string $attributes){
        $this->attributes = $attributes;
    }

    public function getRefundPhase() : string{
        return $this->refund_phase;
    }

    public function setRefundPhase(string $refundPhase){
        $this->refund_phase = $refundPhase;
    }

    public function getBuyerAddress() : string{
        return $this->buyer_address;
    }

    public function setBuyerAddress(string $buyerAddress){
        $this->buyer_address = $buyerAddress;
    }

    public function getOperationContraint() : string{
        return $this->operation_contraint;
    }

    public function setOperationContraint(string $operationContraint){
        $this->operation_contraint = $operationContraint;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getAdvanceStatus() : int{
        return $this->advance_status;
    }

    public function setAdvanceStatus(int $advanceStatus){
        $this->advance_status = $advanceStatus;
    }

    public function getBuyerNick() : string{
        return $this->buyer_nick;
    }

    public function setBuyerNick(string $buyerNick){
        $this->buyer_nick = $buyerNick;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getRefundVersion() : int{
        return $this->refund_version;
    }

    public function setRefundVersion(int $refundVersion){
        $this->refund_version = $refundVersion;
    }

    public function getSellerLogisticName() : string{
        return $this->seller_logistic_name;
    }

    public function setSellerLogisticName(string $sellerLogisticName){
        $this->seller_logistic_name = $sellerLogisticName;
    }

    public function getBoughtSku() : string{
        return $this->bought_sku;
    }

    public function setBoughtSku(string $boughtSku){
        $this->bought_sku = $boughtSku;
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

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getSellerLogisticNo() : string{
        return $this->seller_logistic_no;
    }

    public function setSellerLogisticNo(string $sellerLogisticNo){
        $this->seller_logistic_no = $sellerLogisticNo;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getTimeOut() : string{
        return $this->time_out;
    }

    public function setTimeOut(string $timeOut){
        $this->time_out = $timeOut;
    }

    public function getCsStatus() : int{
        return $this->cs_status;
    }

    public function setCsStatus(int $csStatus){
        $this->cs_status = $csStatus;
    }

    public function getGoodStatus() : string{
        return $this->good_status;
    }

    public function setGoodStatus(string $goodStatus){
        $this->good_status = $goodStatus;
    }

    public function getBizOrderId() : string{
        return $this->biz_order_id;
    }

    public function setBizOrderId(string $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getOaid() : string{
        return $this->oaid;
    }

    public function setOaid(string $oaid){
        $this->oaid = $oaid;
    }

    public function getBuyerOpenUid() : string{
        return $this->buyer_open_uid;
    }

    public function setBuyerOpenUid(string $buyerOpenUid){
        $this->buyer_open_uid = $buyerOpenUid;
    }

    public function getNewBoughtSku() : string{
        return $this->new_bought_sku;
    }

    public function setNewBoughtSku(string $newBoughtSku){
        $this->new_bought_sku = $newBoughtSku;
    }

    public function getRealReceiverOpenId() : string{
        return $this->real_receiver_open_id;
    }

    public function setRealReceiverOpenId(string $realReceiverOpenId){
        $this->real_receiver_open_id = $realReceiverOpenId;
    }

    public function getRealReceiverDisplayNick() : string{
        return $this->real_receiver_display_nick;
    }

    public function setRealReceiverDisplayNick(string $realReceiverDisplayNick){
        $this->real_receiver_display_nick = $realReceiverDisplayNick;
    }

    public function getBuyerPhone() : string{
        return $this->buyer_phone;
    }

    public function setBuyerPhone(string $buyerPhone){
        $this->buyer_phone = $buyerPhone;
    }

    public function getBuyerName() : string{
        return $this->buyer_name;
    }

    public function setBuyerName(string $buyerName){
        $this->buyer_name = $buyerName;
    }


}

