<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaWdkCouponSpreadApplyWdkCouponApplyParam;

class AlibabaWdkCouponSpreadApplyRequest {

    /**
        参数对象
     **/
    private $paramWdkCouponApplyParam;


    public function getParamWdkCouponApplyParam() : AlibabaWdkCouponSpreadApplyWdkCouponApplyParam{
        return $this->paramWdkCouponApplyParam;
    }

    public function setParamWdkCouponApplyParam(AlibabaWdkCouponSpreadApplyWdkCouponApplyParam $paramWdkCouponApplyParam){
        $this->paramWdkCouponApplyParam = $paramWdkCouponApplyParam;
    }


    public function getApiName() : string {
        return "alibaba.wdk.coupon.spread.apply";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramWdkCouponApplyParam)) {
            $requestParam["param_wdk_coupon_apply_param"] = TopUtil::convertStruct($this->paramWdkCouponApplyParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

