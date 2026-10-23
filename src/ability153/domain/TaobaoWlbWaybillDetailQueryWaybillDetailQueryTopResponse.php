<?php
namespace TaoBao\TopSdk\Ability153\Domain;

class TaobaoWlbWaybillDetailQueryWaybillDetailQueryTopResponse {

    /**
        面单号
     **/
    public $waybill_code;

    /**
        母单号
     **/
    public $parent_waybill_code;

    /**
        快递编码
     **/
    public $cp_code;

    /**
        分单路由列表
     **/
    public $route_info_list;

    /**
        顺丰路由信息，json格式
     **/
    public $sf_route_info;

    /**
        包裹信息
     **/
    public $package_info;


    public function getWaybillCode() : string{
        return $this->waybill_code;
    }

    public function setWaybillCode(string $waybillCode){
        $this->waybill_code = $waybillCode;
    }

    public function getParentWaybillCode() : string{
        return $this->parent_waybill_code;
    }

    public function setParentWaybillCode(string $parentWaybillCode){
        $this->parent_waybill_code = $parentWaybillCode;
    }

    public function getCpCode() : string{
        return $this->cp_code;
    }

    public function setCpCode(string $cpCode){
        $this->cp_code = $cpCode;
    }

    public function getRouteInfoList() : array{
        return $this->route_info_list;
    }

    public function setRouteInfoList(array $routeInfoList){
        $this->route_info_list = $routeInfoList;
    }

    public function getSfRouteInfo() : string{
        return $this->sf_route_info;
    }

    public function setSfRouteInfo(string $sfRouteInfo){
        $this->sf_route_info = $sfRouteInfo;
    }

    public function getPackageInfo() : TaobaoWlbWaybillDetailQueryPackageInfoDTO{
        return $this->package_info;
    }

    public function setPackageInfo(TaobaoWlbWaybillDetailQueryPackageInfoDTO $packageInfo){
        $this->package_info = $packageInfo;
    }


}

