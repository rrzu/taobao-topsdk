<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaHmMarketingItembuygiftCreateactivityItemBuyGiftActivity;

class AlibabaHmMarketingItembuygiftCreateactivityRequest {

    /**
        创建活动请求入参
     **/
    private $param;


    public function getParam() : AlibabaHmMarketingItembuygiftCreateactivityItemBuyGiftActivity{
        return $this->param;
    }

    public function setParam(AlibabaHmMarketingItembuygiftCreateactivityItemBuyGiftActivity $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.itembuygift.createactivity";
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

