<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaHmMarketingItembuygiftDeleteactivityCommonActivityParam;

class AlibabaHmMarketingItembuygiftDeleteactivityRequest {

    /**
        要删除的活动信息
     **/
    private $param;


    public function getParam() : AlibabaHmMarketingItembuygiftDeleteactivityCommonActivityParam{
        return $this->param;
    }

    public function setParam(AlibabaHmMarketingItembuygiftDeleteactivityCommonActivityParam $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.itembuygift.deleteactivity";
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

