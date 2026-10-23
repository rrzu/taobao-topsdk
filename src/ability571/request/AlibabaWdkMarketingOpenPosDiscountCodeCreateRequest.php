<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaWdkMarketingOpenPosDiscountCodeCreateUniqueDiscountCodeRequest;

class AlibabaWdkMarketingOpenPosDiscountCodeCreateRequest {

    /**
        请求信息
     **/
    private $uniqueDiscountCodeRequest;


    public function getUniqueDiscountCodeRequest() : AlibabaWdkMarketingOpenPosDiscountCodeCreateUniqueDiscountCodeRequest{
        return $this->uniqueDiscountCodeRequest;
    }

    public function setUniqueDiscountCodeRequest(AlibabaWdkMarketingOpenPosDiscountCodeCreateUniqueDiscountCodeRequest $uniqueDiscountCodeRequest){
        $this->uniqueDiscountCodeRequest = $uniqueDiscountCodeRequest;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.open.pos.discount.code.create";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->uniqueDiscountCodeRequest)) {
            $requestParam["unique_discount_code_request"] = TopUtil::convertStruct($this->uniqueDiscountCodeRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

