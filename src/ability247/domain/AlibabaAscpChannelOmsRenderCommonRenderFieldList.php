<?php
namespace TaoBao\TopSdk\Ability247\Domain;

class AlibabaAscpChannelOmsRenderCommonRenderFieldList {

    /**
        展示名称
     **/
    public $show_name;

    /**
        key名称
     **/
    public $key_name;

    /**
        值类型
     **/
    public $type;

    /**
        是否必须
     **/
    public $required;


    public function getShowName() : string{
        return $this->show_name;
    }

    public function setShowName(string $showName){
        $this->show_name = $showName;
    }

    public function getKeyName() : string{
        return $this->key_name;
    }

    public function setKeyName(string $keyName){
        $this->key_name = $keyName;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getRequired() : bool{
        return $this->required;
    }

    public function setRequired(bool $required){
        $this->required = $required;
    }


}

