<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaWdkCouponAbandonWdkCouponAbandonParam;

class AlibabaWdkCouponAbandonRequest {

    /**
        废券参数
     **/
    private $paramWdkCouponAbandonParam;


    public function getParamWdkCouponAbandonParam() : AlibabaWdkCouponAbandonWdkCouponAbandonParam{
        return $this->paramWdkCouponAbandonParam;
    }

    public function setParamWdkCouponAbandonParam(AlibabaWdkCouponAbandonWdkCouponAbandonParam $paramWdkCouponAbandonParam){
        $this->paramWdkCouponAbandonParam = $paramWdkCouponAbandonParam;
    }


    public function getApiName() : string {
        return "alibaba.wdk.coupon.abandon";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramWdkCouponAbandonParam)) {
            $requestParam["param_wdk_coupon_abandon_param"] = TopUtil::convertStruct($this->paramWdkCouponAbandonParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

