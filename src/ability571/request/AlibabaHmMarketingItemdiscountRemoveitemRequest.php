<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaHmMarketingItemdiscountRemoveitemCommonActivityParam;
use TaoBao\TopSdk\Ability571\Domain\AlibabaHmMarketingItemdiscountRemoveitemItemDiscountSku;

class AlibabaHmMarketingItemdiscountRemoveitemRequest {

    /**
        商品对象
     **/
    private $param0;

    /**
        活动基本信息
     **/
    private $param1;


    public function getParam0() : AlibabaHmMarketingItemdiscountRemoveitemItemDiscountSku{
        return $this->param0;
    }

    public function setParam0(AlibabaHmMarketingItemdiscountRemoveitemItemDiscountSku $param0){
        $this->param0 = $param0;
    }

    public function getParam1() : AlibabaHmMarketingItemdiscountRemoveitemCommonActivityParam{
        return $this->param1;
    }

    public function setParam1(AlibabaHmMarketingItemdiscountRemoveitemCommonActivityParam $param1){
        $this->param1 = $param1;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.itemdiscount.removeitem";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param0)) {
            $requestParam["param0"] = TopUtil::convertStruct($this->param0);
        }

        if (!TopUtil::checkEmpty($this->param1)) {
            $requestParam["param1"] = TopUtil::convertStruct($this->param1);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

