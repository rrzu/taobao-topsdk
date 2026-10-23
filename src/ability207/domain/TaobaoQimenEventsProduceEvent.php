<?php
namespace TaoBao\TopSdk\Ability207\Domain;

class TaobaoQimenEventsProduceEvent {

    /**
        淘宝订单号
     **/
    public $tid;

    /**
        扩展属性
     **/
    public $ext;

    /**
        事件状态，如QIMEN_ERP_TRANSFER，QIMEN_ERP_CHECK
     **/
    public $status;

    /**
        商家平台编码.MAIN:官方渠道,JD:京东,DD:当当,PP:拍拍,YX:易讯,EBAY:ebay,AMAZON:亚马逊,SN:苏宁,GM:国美,WPH:唯品会,JM:聚美,MGJ:蘑菇街,YT:银泰,YHD:1号店,1688:1688,POS:POS门店,OTHER:其他
     **/
    public $platform;

    /**
        订单创建时间,数字
     **/
    public $create;

    /**
        外部商家名称。必须同时填写platform
     **/
    public $nick;

    /**
        主单号对应的erp单号，转单、审单、通知配货、出库 需要填。拆单、合单场景下不用填
     **/
    public $erp_order_id;

    /**
        淘宝子订单id（拆单、合单场景下不用填，其他场景需要回传,用英文逗号隔开）
     **/
    public $taobao_sub_order_ids;

    /**
        触发事件的时间
     **/
    public $event_time;


    public function getTid() : string{
        return $this->tid;
    }

    public function setTid(string $tid){
        $this->tid = $tid;
    }

    public function getExt() : string{
        return $this->ext;
    }

    public function setExt(string $ext){
        $this->ext = $ext;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
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
        return $this->erp_order_id;
    }

    public function setErpOrderId(string $erpOrderId){
        $this->erp_order_id = $erpOrderId;
    }

    public function getTaobaoSubOrderIds() : string{
        return $this->taobao_sub_order_ids;
    }

    public function setTaobaoSubOrderIds(string $taobaoSubOrderIds){
        $this->taobao_sub_order_ids = $taobaoSubOrderIds;
    }

    public function getEventTime() : string{
        return $this->event_time;
    }

    public function setEventTime(string $eventTime){
        $this->event_time = $eventTime;
    }


}

