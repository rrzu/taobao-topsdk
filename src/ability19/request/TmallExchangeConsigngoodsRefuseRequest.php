<?php
namespace TaoBao\TopSdk\Ability19\Request;
use TaoBao\TopSdk\TopUtil;

class TmallExchangeConsigngoodsRefuseRequest {

    /**
        换货单号，必填。
     **/
    private $disputeId;

    /**
        拒绝原因ID，首次拒绝时必填，需属于当前换货单允许的原因；已拒绝发新品的重复请求可不传。
     **/
    private $sellerRefuseReasonId;

    /**
        拒绝发新品的说明，可选。
     **/
    private $leaveMessage;

    /**
        拒绝发新品的凭证图片，可选。
     **/
    private $leaveMessagePics;

    /**
        返回字段列表，必填。支持dispute_id、bizorder_id、modified、status、speed_exchange；speed_exchange按需返回1。
     **/
    private $fields;


    public function getDisputeId() : int{
        return $this->disputeId;
    }

    public function setDisputeId(int $disputeId){
        $this->disputeId = $disputeId;
    }

    public function getSellerRefuseReasonId() : int{
        return $this->sellerRefuseReasonId;
    }

    public function setSellerRefuseReasonId(int $sellerRefuseReasonId){
        $this->sellerRefuseReasonId = $sellerRefuseReasonId;
    }

    public function getLeaveMessage() : string{
        return $this->leaveMessage;
    }

    public function setLeaveMessage(string $leaveMessage){
        $this->leaveMessage = $leaveMessage;
    }

    public function getLeaveMessagePics() : string{
        return $this->leaveMessagePics;
    }

    public function setLeaveMessagePics(string $leaveMessagePics){
        $this->leaveMessagePics = $leaveMessagePics;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }


    public function getApiName() : string {
        return "tmall.exchange.consigngoods.refuse";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->disputeId)) {
            $requestParam["dispute_id"] = TopUtil::convertBasic($this->disputeId);
        }

        if (!TopUtil::checkEmpty($this->sellerRefuseReasonId)) {
            $requestParam["seller_refuse_reason_id"] = TopUtil::convertBasic($this->sellerRefuseReasonId);
        }

        if (!TopUtil::checkEmpty($this->leaveMessage)) {
            $requestParam["leave_message"] = TopUtil::convertBasic($this->leaveMessage);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        if (!TopUtil::checkEmpty($this->leaveMessagePics)){
            $fileParam["leave_message_pics"] = TopUtil::convertBasic($this->leaveMessagePics);
        }
        return $fileParam;
    }

}

