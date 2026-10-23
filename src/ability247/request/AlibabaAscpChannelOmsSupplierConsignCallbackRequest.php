<?php
namespace TaoBao\TopSdk\Ability247\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability247\Domain\AlibabaAscpChannelOmsSupplierConsignCallbackWarehouseSaleConsignRequest;

class AlibabaAscpChannelOmsSupplierConsignCallbackRequest {

    /**
        发货请求
     **/
    private $warehouseSaleConsignRequest;


    public function getWarehouseSaleConsignRequest() : AlibabaAscpChannelOmsSupplierConsignCallbackWarehouseSaleConsignRequest{
        return $this->warehouseSaleConsignRequest;
    }

    public function setWarehouseSaleConsignRequest(AlibabaAscpChannelOmsSupplierConsignCallbackWarehouseSaleConsignRequest $warehouseSaleConsignRequest){
        $this->warehouseSaleConsignRequest = $warehouseSaleConsignRequest;
    }


    public function getApiName() : string {
        return "alibaba.ascp.channel.oms.supplier.consign.callback";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->warehouseSaleConsignRequest)) {
            $requestParam["warehouse_sale_consign_request"] = TopUtil::convertStruct($this->warehouseSaleConsignRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

