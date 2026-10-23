<?php
namespace TaoBao\TopSdk\Defaultability\Domain;

class TaobaoWlbWaybillIFullupdateWaybillAddress {

    /**
        详细地址
     **/
    public $address_detail;

    /**
        区名称（三级地址）
     **/
    public $area;

    /**
        市名称（二级地址）
     **/
    public $city;

    /**
        一级地址（省、直辖市
     **/
    public $province;

    /**
        街道\镇名称（四级地址）
     **/
    public $town;

    /**
        地址信息系统标准格式
     **/
    public $address_non_code_format;


    public function getAddressDetail() : string{
        return $this->address_detail;
    }

    public function setAddressDetail(string $addressDetail){
        $this->address_detail = $addressDetail;
    }

    public function getArea() : string{
        return $this->area;
    }

    public function setArea(string $area){
        $this->area = $area;
    }

    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }

    public function getProvince() : string{
        return $this->province;
    }

    public function setProvince(string $province){
        $this->province = $province;
    }

    public function getTown() : string{
        return $this->town;
    }

    public function setTown(string $town){
        $this->town = $town;
    }

    public function getAddressNonCodeFormat() : string{
        return $this->address_non_code_format;
    }

    public function setAddressNonCodeFormat(string $addressNonCodeFormat){
        $this->address_non_code_format = $addressNonCodeFormat;
    }


}

