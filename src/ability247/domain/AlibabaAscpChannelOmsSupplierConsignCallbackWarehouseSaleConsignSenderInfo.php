<?php
namespace TaoBao\TopSdk\Ability247\Domain;

class AlibabaAscpChannelOmsSupplierConsignCallbackWarehouseSaleConsignSenderInfo {

    /**
        邮编
     **/
    public $zip_code;

    /**
        街道名称
     **/
    public $town_name;

    /**
        详细地址
     **/
    public $address;

    /**
        手机号码
     **/
    public $phone_number;

    /**
        城市名称
     **/
    public $city_name;

    /**
        区县名称
     **/
    public $area_name;

    /**
        发货人名称
     **/
    public $name;

    /**
        国名称
     **/
    public $country_name;

    /**
        省名称
     **/
    public $province_name;

    /**
        座机号码
     **/
    public $landline_number;


    public function getZipCode() : string{
        return $this->zip_code;
    }

    public function setZipCode(string $zipCode){
        $this->zip_code = $zipCode;
    }

    public function getTownName() : string{
        return $this->town_name;
    }

    public function setTownName(string $townName){
        $this->town_name = $townName;
    }

    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getPhoneNumber() : string{
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phoneNumber){
        $this->phone_number = $phoneNumber;
    }

    public function getCityName() : string{
        return $this->city_name;
    }

    public function setCityName(string $cityName){
        $this->city_name = $cityName;
    }

    public function getAreaName() : string{
        return $this->area_name;
    }

    public function setAreaName(string $areaName){
        $this->area_name = $areaName;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getCountryName() : string{
        return $this->country_name;
    }

    public function setCountryName(string $countryName){
        $this->country_name = $countryName;
    }

    public function getProvinceName() : string{
        return $this->province_name;
    }

    public function setProvinceName(string $provinceName){
        $this->province_name = $provinceName;
    }

    public function getLandlineNumber() : string{
        return $this->landline_number;
    }

    public function setLandlineNumber(string $landlineNumber){
        $this->landline_number = $landlineNumber;
    }


}

