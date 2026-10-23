<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaWdkMarketingVersionGenerateSeasonVersionParam;

class AlibabaWdkMarketingVersionGenerateRequest {

    /**
        档期版本号参数信息
     **/
    private $param;


    public function getParam() : AlibabaWdkMarketingVersionGenerateSeasonVersionParam{
        return $this->param;
    }

    public function setParam(AlibabaWdkMarketingVersionGenerateSeasonVersionParam $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.version.generate";
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

