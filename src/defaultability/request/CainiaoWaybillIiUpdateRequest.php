<?php
namespace TaoBao\TopSdk\Defaultability\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Defaultability\Domain\CainiaoWaybillIiUpdateWaybillCloudPrintUpdateRequest;

class CainiaoWaybillIiUpdateRequest {

    /**
        更新请求信息
     **/
    private $paramWaybillCloudPrintUpdateRequest;


    public function getParamWaybillCloudPrintUpdateRequest() : CainiaoWaybillIiUpdateWaybillCloudPrintUpdateRequest{
        return $this->paramWaybillCloudPrintUpdateRequest;
    }

    public function setParamWaybillCloudPrintUpdateRequest(CainiaoWaybillIiUpdateWaybillCloudPrintUpdateRequest $paramWaybillCloudPrintUpdateRequest){
        $this->paramWaybillCloudPrintUpdateRequest = $paramWaybillCloudPrintUpdateRequest;
    }


    public function getApiName() : string {
        return "cainiao.waybill.ii.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramWaybillCloudPrintUpdateRequest)) {
            $requestParam["param_waybill_cloud_print_update_request"] = TopUtil::convertStruct($this->paramWaybillCloudPrintUpdateRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

