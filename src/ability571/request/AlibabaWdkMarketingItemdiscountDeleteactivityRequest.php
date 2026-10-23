<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaWdkMarketingItemdiscountDeleteactivityCommonActivityRequest;

class AlibabaWdkMarketingItemdiscountDeleteactivityRequest {

    /**
        需要删除的活动的信息
     **/
    private $param;


    public function getParam() : AlibabaWdkMarketingItemdiscountDeleteactivityCommonActivityRequest{
        return $this->param;
    }

    public function setParam(AlibabaWdkMarketingItemdiscountDeleteactivityCommonActivityRequest $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.itemdiscount.deleteactivity";
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

