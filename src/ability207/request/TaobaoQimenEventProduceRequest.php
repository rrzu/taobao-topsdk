<?php
namespace TaoBao\TopSdk\Ability207\Request;
use TaoBao\TopSdk\TopUtil;

class TaobaoQimenEventProduceRequest {

    /**
        事件状态，如QIMEN_ERP_TRANSFER，QIMEN_ERP_CHECK
     **/
    private $status;

    /**
        JSON格式扩展字段
     **/
    private $ext;

    /**
        淘宝订单号
     **/
    private $tid;

    /**
        商家平台编码.MAIN:官方渠道,JD:京东,DD:当当,PP:拍拍,YX:易讯,EBAY:ebay,AMAZON:亚马逊,SN:苏宁,GM:国美,WPH:唯品会,JM:聚美,MGJ:蘑菇街,YT:银泰,YHD:1号店,1688:1688,POS:POS门店,OTHER:其他
     **/
    private $platform;

    /**
        订单创建时间,数字
     **/
    private $create;

    /**
        外部商家名称。必须同时填写platform
     **/
    private $nick;

    /**
        主单号对应的erp单号，转单、审单、通知配货、出库 需要填。拆单、合单场景下不用填
     **/
    private $erpOrderId;

    /**
        淘宝子订单id（拆单、合单场景下不用填，其他场景需要回传,用英文逗号隔开）
     **/
    private $taobaoSubOrderIds;

    /**
        触发事件的时间
     **/
    private $eventTime;


    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getExt() : string{
        return $this->ext;
    }

    public function setExt(string $ext){
        $this->ext = $ext;
    }

    public function getTid() : string{
        return $this->tid;
    }

    public function setTid(string $tid){
        $this->tid = $tid;
    }

    public function getPlatform() : string{
        return $this->platform;
    }

    public function setPlatform(string $platform){
        $this->platform = $platform;
    }

    public function getCreate() : int{
        return $this->create;
    }

    public function setCreate(int $create){
        $this->create = $create;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getErpOrderId() : string{
        return $this->erpOrderId;
    }

    public function setErpOrderId(string $erpOrderId){
        $this->erpOrderId = $erpOrderId;
    }

    public function getTaobaoSubOrderIds() : string{
        return $this->taobaoSubOrderIds;
    }

    public function setTaobaoSubOrderIds(string $taobaoSubOrderIds){
        $this->taobaoSubOrderIds = $taobaoSubOrderIds;
    }

    public function getEventTime() : string{
        return $this->eventTime;
    }

    public function setEventTime(string $eventTime){
        $this->eventTime = $eventTime;
    }


    public function getApiName() : string {
        return "taobao.qimen.event.produce";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        if (!TopUtil::checkEmpty($this->ext)) {
            $requestParam["ext"] = TopUtil::convertBasic($this->ext);
        }

        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        if (!TopUtil::checkEmpty($this->platform)) {
            $requestParam["platform"] = TopUtil::convertBasic($this->platform);
        }

        if (!TopUtil::checkEmpty($this->create)) {
            $requestParam["create"] = TopUtil::convertBasic($this->create);
        }

        if (!TopUtil::checkEmpty($this->nick)) {
            $requestParam["nick"] = TopUtil::convertBasic($this->nick);
        }

        if (!TopUtil::checkEmpty($this->erpOrderId)) {
            $requestParam["erp_order_id"] = TopUtil::convertBasic($this->erpOrderId);
        }

        if (!TopUtil::checkEmpty($this->taobaoSubOrderIds)) {
            $requestParam["taobao_sub_order_ids"] = TopUtil::convertBasic($this->taobaoSubOrderIds);
        }

        if (!TopUtil::checkEmpty($this->eventTime)) {
            $requestParam["event_time"] = TopUtil::convertBasic($this->eventTime);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

