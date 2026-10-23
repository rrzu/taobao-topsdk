<?php
namespace TaoBao\TopSdk\Defaultability\Request;
use TaoBao\TopSdk\TopUtil;

class TmallReshippingConsigngoodsRequest {

    /**
        补寄单号ID
     **/
    private $disputeId;

    /**
        卖家发货的物流单号
     **/
    private $logisticsNo;

    /**
        卖家发货的物流类型，100表示平邮，200表示快递
     **/
    private $logisticsType;

    /**
        卖家发货的快递公司
     **/
    private $logisticsCompanyName;

    /**
        返回字段
     **/
    private $fields;

    /**
        卖家发货的快递公司编号,ZTO(中通)、YTO(圆通)、STO(申通)、YUNDA(韵达)、HTKY(极兔)、EMS(邮政),不知道code默认填-1
     **/
    private $logisticsCompanyCode;


    public function getDisputeId() : int{
        return $this->disputeId;
    }

    public function setDisputeId(int $disputeId){
        $this->disputeId = $disputeId;
    }

    public function getLogisticsNo() : string{
        return $this->logisticsNo;
    }

    public function setLogisticsNo(string $logisticsNo){
        $this->logisticsNo = $logisticsNo;
    }

    public function getLogisticsType() : int{
        return $this->logisticsType;
    }

    public function setLogisticsType(int $logisticsType){
        $this->logisticsType = $logisticsType;
    }

    public function getLogisticsCompanyName() : string{
        return $this->logisticsCompanyName;
    }

    public function setLogisticsCompanyName(string $logisticsCompanyName){
        $this->logisticsCompanyName = $logisticsCompanyName;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getLogisticsCompanyCode() : string{
        return $this->logisticsCompanyCode;
    }

    public function setLogisticsCompanyCode(string $logisticsCompanyCode){
        $this->logisticsCompanyCode = $logisticsCompanyCode;
    }


    public function getApiName() : string {
        return "tmall.reshipping.consigngoods";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->disputeId)) {
            $requestParam["dispute_id"] = TopUtil::convertBasic($this->disputeId);
        }

        if (!TopUtil::checkEmpty($this->logisticsNo)) {
            $requestParam["logistics_no"] = TopUtil::convertBasic($this->logisticsNo);
        }

        if (!TopUtil::checkEmpty($this->logisticsType)) {
            $requestParam["logistics_type"] = TopUtil::convertBasic($this->logisticsType);
        }

        if (!TopUtil::checkEmpty($this->logisticsCompanyName)) {
            $requestParam["logistics_company_name"] = TopUtil::convertBasic($this->logisticsCompanyName);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->logisticsCompanyCode)) {
            $requestParam["logistics_company_code"] = TopUtil::convertBasic($this->logisticsCompanyCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

