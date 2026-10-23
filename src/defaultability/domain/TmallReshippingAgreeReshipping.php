<?php
namespace TaoBao\TopSdk\Defaultability\Domain;

class TmallReshippingAgreeReshipping {

    /**
        修改时间
     **/
    public $modified;

    /**
        补寄单号ID
     **/
    public $dispute_id;

    /**
        补寄单状态，具体包括：补寄待处理(WAIT_SELLER_AGREE), 等待卖家发货(WAIT_SELLER_SEND_GOODS), 等待买家收货(WAIT_BUYER_CONFIRM_REDO_SEND_GOODS), 补寄成功(SUCCESS), 卖家拒绝补寄(SELLER_REFUSE_BUYER), 补寄关闭(CLOSED), 转退款(EXCHANGE_TRANSFORM_TO_REFUND)
     **/
    public $status;

    /**
        正向交易单号ID
     **/
    public $biz_order_id;

    /**
        超时时间
     **/
    public $time_out;

    /**
        扩展属性
     **/
    public $attributes;


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

    public function getTimeOut() : string{
        return $this->time_out;
    }

    public function setTimeOut(string $timeOut){
        $this->time_out = $timeOut;
    }

    public function getAttributes() : string{
        return $this->attributes;
    }

    public function setAttributes(string $attributes){
        $this->attributes = $attributes;
    }


}

