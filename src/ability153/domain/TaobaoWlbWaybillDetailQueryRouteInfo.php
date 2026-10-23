<?php
namespace TaoBao\TopSdk\Ability153\Domain;

class TaobaoWlbWaybillDetailQueryRouteInfo {

    /**
        分单路由key
     **/
    public $key;

    /**
        分单路由码值
     **/
    public $value;


    public function getKey() : string{
        return $this->key;
    }

    public function setKey(string $key){
        $this->key = $key;
    }

    public function getValue() : string{
        return $this->value;
    }

    public function setValue(string $value){
        $this->value = $value;
    }


}

