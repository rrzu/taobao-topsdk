<?php
namespace TaoBao\TopSdk\Ability247\Domain;

class AlibabaAscpChannelOmsSupplierConsignCallbackWarehouseSaleConsignPackageOrderRequest {

    /**
        包裹扩展字段
     **/
    public $feature_map;

    /**
        包裹运单号
     **/
    public $package_order_code;

    /**
        包裹明细列表
     **/
    public $detail_list;

    /**
        包裹快递公司名称
     **/
    public $package_company_name;

    /**
        包裹快递公司编码
     **/
    public $package_company_code;


    public function getFeatureMap() : array{
        return $this->feature_map;
    }

    public function setFeatureMap(array $featureMap){
        $this->feature_map = $featureMap;
    }

    public function getPackageOrderCode() : string{
        return $this->package_order_code;
    }

    public function setPackageOrderCode(string $packageOrderCode){
        $this->package_order_code = $packageOrderCode;
    }

    public function getDetailList() : array{
        return $this->detail_list;
    }

    public function setDetailList(array $detailList){
        $this->detail_list = $detailList;
    }

    public function getPackageCompanyName() : string{
        return $this->package_company_name;
    }

    public function setPackageCompanyName(string $packageCompanyName){
        $this->package_company_name = $packageCompanyName;
    }

    public function getPackageCompanyCode() : string{
        return $this->package_company_code;
    }

    public function setPackageCompanyCode(string $packageCompanyCode){
        $this->package_company_code = $packageCompanyCode;
    }


}

