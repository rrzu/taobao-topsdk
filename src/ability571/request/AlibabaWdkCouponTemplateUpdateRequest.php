<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaWdkCouponTemplateUpdateCouponTemplateOperateRequest;

class AlibabaWdkCouponTemplateUpdateRequest {

    /**
        请求
     **/
    private $paramCouponTemplateOperateRequest;


    public function getParamCouponTemplateOperateRequest() : AlibabaWdkCouponTemplateUpdateCouponTemplateOperateRequest{
        return $this->paramCouponTemplateOperateRequest;
    }

    public function setParamCouponTemplateOperateRequest(AlibabaWdkCouponTemplateUpdateCouponTemplateOperateRequest $paramCouponTemplateOperateRequest){
        $this->paramCouponTemplateOperateRequest = $paramCouponTemplateOperateRequest;
    }


    public function getApiName() : string {
        return "alibaba.wdk.coupon.template.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramCouponTemplateOperateRequest)) {
            $requestParam["param_coupon_template_operate_request"] = TopUtil::convertStruct($this->paramCouponTemplateOperateRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

