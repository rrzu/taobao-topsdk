<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaWdkMarketingItemdiscountCreateactivityItemDiscountActivityRequest;

class AlibabaWdkMarketingItemdiscountCreateactivityRequest {

    /**
        创建活动请求入参
     **/
    private $param;


    public function getParam() : AlibabaWdkMarketingItemdiscountCreateactivityItemDiscountActivityRequest{
        return $this->param;
    }

    public function setParam(AlibabaWdkMarketingItemdiscountCreateactivityItemDiscountActivityRequest $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.itemdiscount.createactivity";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param)) {
            $requestParam["param"] = TopUtil::convertStruct($this->param);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

