<?php
namespace TaoBao\TopSdk\Ability247\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability247\Domain\AlibabaAscpChannelOmsLogisticsCallbackWarehouseLogisticsStatusRequest;

class AlibabaAscpChannelOmsLogisticsCallbackRequest {

    /**
        物流状态回传请求
     **/
    private $warehouseLogisticsStatusRequest;


    public function getWarehouseLogisticsStatusRequest() : AlibabaAscpChannelOmsLogisticsCallbackWarehouseLogisticsStatusRequest{
        return $this->warehouseLogisticsStatusRequest;
    }

    public function setWarehouseLogisticsStatusRequest(AlibabaAscpChannelOmsLogisticsCallbackWarehouseLogisticsStatusRequest $warehouseLogisticsStatusRequest){
        $this->warehouseLogisticsStatusRequest = $warehouseLogisticsStatusRequest;
    }


    public function getApiName() : string {
        return "alibaba.ascp.channel.oms.logistics.callback";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->warehouseLogisticsStatusRequest)) {
            $requestParam["warehouse_logistics_status_request"] = TopUtil::convertStruct($this->warehouseLogisticsStatusRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

