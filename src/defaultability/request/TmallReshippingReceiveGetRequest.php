<?php
namespace TaoBao\TopSdk\Defaultability\Request;
use TaoBao\TopSdk\TopUtil;

class TmallReshippingReceiveGetRequest {

    /**
        查询修改时间段的结束时间点
     **/
    private $endGmtModifedTime;

    /**
        快递单号
     **/
    private $logisticNo;

    /**
        买家昵称
     **/
    private $buyerNick;

    /**
        查询申请时间段的开始时间点
     **/
    private $startCreatedTime;

    /**
        返回字段。目前支持dispute_id, bizorder_id, num, buyer_nick, status, created, modified, reason, title, seller_logistic_no, bought_sku, seller_logistic_name, alipay_no, seller_nick,attributes,refund_phase,buyer_address,price,time_out,cs_status,good_status,buyer_open_uid,new_bought_sku
     **/
    private $fields;

    /**
        每页条数
     **/
    private $pageSize;

    /**
        补寄状态，具体包括：补寄待处理(1), 等待卖家发货(16), 等待买家收货(7), 补寄成功(5), 卖家拒绝补寄(6), 补寄关闭(4), 转退款(14)
     **/
    private $disputeStatusArray;

    /**
        查询申请时间段的结束时间点
     **/
    private $endCreatedTime;

    /**
        买家的openId
     **/
    private $buyerOpenUid;

    /**
        退款单号ID列表，最多只能输入20个id
     **/
    private $refundIdArray;

    /**
        页码
     **/
    private $pageNo;

    /**
        查询修改时间段的开始时间点
     **/
    private $startGmtModifiedTime;

    /**
        正向订单号
     **/
    private $bizOrderId;


    public function getEndGmtModifedTime() : string{
        return $this->endGmtModifedTime;
    }

    public function setEndGmtModifedTime(string $endGmtModifedTime){
        $this->endGmtModifedTime = $endGmtModifedTime;
    }

    public function getLogisticNo() : string{
        return $this->logisticNo;
    }

    public function setLogisticNo(string $logisticNo){
        $this->logisticNo = $logisticNo;
    }

    public function getBuyerNick() : string{
        return $this->buyerNick;
    }

    public function setBuyerNick(string $buyerNick){
        $this->buyerNick = $buyerNick;
    }

    public function getStartCreatedTime() : string{
        return $this->startCreatedTime;
    }

    public function setStartCreatedTime(string $startCreatedTime){
        $this->startCreatedTime = $startCreatedTime;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getDisputeStatusArray() : array{
        return $this->disputeStatusArray;
    }

    public function setDisputeStatusArray(array $disputeStatusArray){
        $this->disputeStatusArray = $disputeStatusArray;
    }

    public function getEndCreatedTime() : string{
        return $this->endCreatedTime;
    }

    public function setEndCreatedTime(string $endCreatedTime){
        $this->endCreatedTime = $endCreatedTime;
    }

    public function getBuyerOpenUid() : string{
        return $this->buyerOpenUid;
    }

    public function setBuyerOpenUid(string $buyerOpenUid){
        $this->buyerOpenUid = $buyerOpenUid;
    }

    public function getRefundIdArray() : array{
        return $this->refundIdArray;
    }

    public function setRefundIdArray(array $refundIdArray){
        $this->refundIdArray = $refundIdArray;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getStartGmtModifiedTime() : string{
        return $this->startGmtModifiedTime;
    }

    public function setStartGmtModifiedTime(string $startGmtModifiedTime){
        $this->startGmtModifiedTime = $startGmtModifiedTime;
    }

    public function getBizOrderId() : int{
        return $this->bizOrderId;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->bizOrderId = $bizOrderId;
    }


    public function getApiName() : string {
        return "tmall.reshipping.receive.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->endGmtModifedTime)) {
            $requestParam["end_gmt_modifed_time"] = TopUtil::convertBasic($this->endGmtModifedTime);
        }

        if (!TopUtil::checkEmpty($this->logisticNo)) {
            $requestParam["logistic_no"] = TopUtil::convertBasic($this->logisticNo);
        }

        if (!TopUtil::checkEmpty($this->buyerNick)) {
            $requestParam["buyer_nick"] = TopUtil::convertBasic($this->buyerNick);
        }

        if (!TopUtil::checkEmpty($this->startCreatedTime)) {
            $requestParam["start_created_time"] = TopUtil::convertBasic($this->startCreatedTime);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->disputeStatusArray)) {
            $requestParam["dispute_status_array"] = TopUtil::convertBasicList($this->disputeStatusArray);
        }

        if (!TopUtil::checkEmpty($this->endCreatedTime)) {
            $requestParam["end_created_time"] = TopUtil::convertBasic($this->endCreatedTime);
        }

        if (!TopUtil::checkEmpty($this->buyerOpenUid)) {
            $requestParam["buyer_open_uid"] = TopUtil::convertBasic($this->buyerOpenUid);
        }

        if (!TopUtil::checkEmpty($this->refundIdArray)) {
            $requestParam["refund_id_array"] = TopUtil::convertBasicList($this->refundIdArray);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->startGmtModifiedTime)) {
            $requestParam["start_gmt_modified_time"] = TopUtil::convertBasic($this->startGmtModifiedTime);
        }

        if (!TopUtil::checkEmpty($this->bizOrderId)) {
            $requestParam["biz_order_id"] = TopUtil::convertBasic($this->bizOrderId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

