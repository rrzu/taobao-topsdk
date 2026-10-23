<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaHmMarketingItempoolCreateactivityItemPoolActivity;

class AlibabaHmMarketingItempoolCreateactivityRequest {

    /**
        创建活动请求入参
     **/
    private $param;


    public function getParam() : AlibabaHmMarketingItempoolCreateactivityItemPoolActivity{
        return $this->param;
    }

    public function setParam(AlibabaHmMarketingItempoolCreateactivityItemPoolActivity $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.itempool.createactivity";
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

