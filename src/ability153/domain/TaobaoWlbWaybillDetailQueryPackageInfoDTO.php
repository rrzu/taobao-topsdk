<?php
namespace TaoBao\TopSdk\Ability153\Domain;

class TaobaoWlbWaybillDetailQueryPackageInfoDTO {

    /**
        重量，单位克
     **/
    public $weight;

    /**
        体积，单位立方厘米
     **/
    public $volume;

    /**
        子母件模式中的总包裹数/总件数
     **/
    public $total_packages_count;

    /**
        当前包裹占总件数第几个
     **/
    public $current_package_sequence;


    public function getWeight() : int{
        return $this->weight;
    }

    public function setWeight(int $weight){
        $this->weight = $weight;
    }

    public function getVolume() : int{
        return $this->volume;
    }

    public function setVolume(int $volume){
        $this->volume = $volume;
    }

    public function getTotalPackagesCount() : int{
        return $this->total_packages_count;
    }

    public function setTotalPackagesCount(int $totalPackagesCount){
        $this->total_packages_count = $totalPackagesCount;
    }

    public function getCurrentPackageSequence() : int{
        return $this->current_package_sequence;
    }

    public function setCurrentPackageSequence(int $currentPackageSequence){
        $this->current_package_sequence = $currentPackageSequence;
    }


}

