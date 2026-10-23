<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaWdkMarketingItemdiscountQueryactivityCommonActivityParam;

class AlibabaWdkMarketingItemdiscountQueryactivityRequest {

    /**
        商品对象
     **/
    private $param0;


    public function getParam0() : AlibabaWdkMarketingItemdiscountQueryactivityCommonActivityParam{
        return $this->param0;
    }

    public function setParam0(AlibabaWdkMarketingItemdiscountQueryactivityCommonActivityParam $param0){
        $this->param0 = $param0;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.itemdiscount.queryactivity";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param0)) {
            $requestParam["param0"] = TopUtil::convertStruct($this->param0);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

