<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaWdkMarketingItembuygiftQueryactivityCommonActivityParam;

class AlibabaWdkMarketingItembuygiftQueryactivityRequest {

    /**
        查询入参
     **/
    private $param;


    public function getParam() : AlibabaWdkMarketingItembuygiftQueryactivityCommonActivityParam{
        return $this->param;
    }

    public function setParam(AlibabaWdkMarketingItembuygiftQueryactivityCommonActivityParam $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.itembuygift.queryactivity";
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

