<?php
namespace TaoBao\TopSdk\Ability153\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability153\Domain\TaobaoWlbWaybillDetailQueryWaybillDetailQueryByWaybillCodeRequest;

class TaobaoWlbWaybillDetailQueryRequest {

    /**
        系统自动生成参数
     **/
    private $waybillQueryParam;


    public function getWaybillQueryParam() : TaobaoWlbWaybillDetailQueryWaybillDetailQueryByWaybillCodeRequest{
        return $this->waybillQueryParam;
    }

    public function setWaybillQueryParam(TaobaoWlbWaybillDetailQueryWaybillDetailQueryByWaybillCodeRequest $waybillQueryParam){
        $this->waybillQueryParam = $waybillQueryParam;
    }


    public function getApiName() : string {
        return "taobao.wlb.waybill.detail.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->waybillQueryParam)) {
            $requestParam["waybill_query_param"] = TopUtil::convertStruct($this->waybillQueryParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

