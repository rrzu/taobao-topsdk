<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaHmMarketingCouponEndactivityCommonActivityParam;

class AlibabaHmMarketingCouponEndactivityRequest {

    /**
        需要删除的活动的信息
     **/
    private $param;


    public function getParam() : AlibabaHmMarketingCouponEndactivityCommonActivityParam{
        return $this->param;
    }

    public function setParam(AlibabaHmMarketingCouponEndactivityCommonActivityParam $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.coupon.endactivity";
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

