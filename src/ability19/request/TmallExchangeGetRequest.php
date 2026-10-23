<?php
namespace TaoBao\TopSdk\Ability19\Request;
use TaoBao\TopSdk\TopUtil;

class TmallExchangeGetRequest {

    /**
        换货单号ID
     **/
    private $disputeId;

    /**
        返回字段。目前支持dispute_id, bizorder_id, num, buyer_nick, status, created, modified, reason, title, buyer_logistic_no, seller_logistic_no, bought_sku, exchange_sku, buyer_address, address, buyer_phone, buyer_logistic_name, seller_logistic_name, alipay_no, buyer_name, seller_nick,attributes,speed_exchange,new_goods_logistic_no,new_goods_logistic_name,se_max_fee,se_advance_fee,se_remind_fee,se_compensate_fee,consign_interval。新增字段通过fields按需返回；除speed_exchange外，仅极速换货且有有效数据时返回，consign_interval仅在待商家发新品阶段（状态17）返回。
     **/
    private $fields;


    public function getDisputeId() : int{
        return $this->disputeId;
    }

    public function setDisputeId(int $disputeId){
        $this->disputeId = $disputeId;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }


    public function getApiName() : string {
        return "tmall.exchange.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->disputeId)) {
            $requestParam["dispute_id"] = TopUtil::convertBasic($this->disputeId);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

