<?php
namespace TaoBao\TopSdk\Ability153\Domain;

class TaobaoWlbWaybillDetailQueryWaybillDetailQueryByWaybillCodeRequest {

    /**
        快递编码
     **/
    public $cp_code;

    /**
        面单号
     **/
    public $waybill_code;

    /**
        请求id，自定义
     **/
    public $object_id;


    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getWaybillCode() : string{
        return $this->waybill_code;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybill_code = $waybillCode;
    }

    public function getObjectId() : string{
        return $this->object_id;
    }

    public function setObjectId(string $objectId){
        $this->object_id = $objectId;
    }


}

