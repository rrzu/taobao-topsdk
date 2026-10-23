<?php
namespace TaoBao\TopSdk\Ability247\Domain;

class AlibabaAscpChannelChildAddressListChannelDivisionDTO {

    /**
        是否是最后一级地址
     **/
    public $last_level;

    /**
        地址编码
     **/
    public $code;

    /**
        地址级别
     **/
    public $level;

    /**
        地址名称
     **/
    public $name;


    public function getLastLevel() : bool{
        return $this->last_level;
    }

    public function setLastLevel(bool $lastLevel){
        $this->last_level = $lastLevel;
    }

    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getLevel() : int{
        return $this->level;
    }

    public function setLevel(int $level){
        $this->level = $level;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }


}

