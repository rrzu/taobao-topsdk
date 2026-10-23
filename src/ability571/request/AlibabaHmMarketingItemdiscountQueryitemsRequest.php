<?php
namespace TaoBao\TopSdk\Ability571\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability571\Domain\AlibabaHmMarketingItemdiscountQueryitemsActivitySkuQuery;

class AlibabaHmMarketingItemdiscountQueryitemsRequest {

    /**
        查询入参
     **/
    private $param;


    public function getParam() : AlibabaHmMarketingItemdiscountQueryitemsActivitySkuQuery{
        return $this->param;
    }

    public function setParam(AlibabaHmMarketingItemdiscountQueryitemsActivitySkuQuery $param){
        $this->param = $param;
    }


    public function getApiName() : string {
        return "alibaba.hm.marketing.itemdiscount.queryitems";
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

