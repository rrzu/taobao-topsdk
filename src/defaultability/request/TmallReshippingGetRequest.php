<?php
namespace TaoBao\TopSdk\Defaultability\Request;
use TaoBao\TopSdk\TopUtil;

class TmallReshippingGetRequest {

    /**
        补寄单号ID
     **/
    private $disputeId;

    /**
        返回字段。目前支持dispute_id, bizorder_id, num, buyer_nick, status, created, modified, reason, title, seller_logistic_no, bought_sku, seller_logistic_name, alipay_no, seller_nick,attributes,refund_phase,buyer_address,price,time_out,cs_status,good_status,buyer_open_uid,new_bought_sku,buyer_phone,buyer_name
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
        return "tmall.reshipping.get";
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

