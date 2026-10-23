<?php
namespace TaoBao\TopSdk\Defaultability\Request;
use TaoBao\TopSdk\TopUtil;

class TaobaoItemTemplatesGetRequest {



    public function getApiName() : string {
        return "taobao.item.templates.get";
    }

    public function toMap() : array{
        $requestParam = array();
        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

