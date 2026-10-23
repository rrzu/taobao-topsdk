<?php
namespace TaoBao\TopSdk\Defaultability\Request;
use TaoBao\TopSdk\TopUtil;

class AlibabaGpuSchemaCatbrandGetRequest {

    /**
        叶子类目ID
     **/
    private $leafCatId;

    /**
        渠道Id，如0代表天猫，8代表淘宝
     **/
    private $providerId;


    public function getLeafCatId() : int{
        return $this->leafCatId;
    }

    public function setLeafCatId(int $leafCatId){
        $this->leafCatId = $leafCatId;
    }

    public function getProviderId() : int{
        return $this->providerId;
    }

    public function setProviderId(int $providerId){
        $this->providerId = $providerId;
    }


    public function getApiName() : string {
        return "alibaba.gpu.schema.catbrand.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->leafCatId)) {
            $requestParam["leaf_cat_id"] = TopUtil::convertBasic($this->leafCatId);
        }

        if (!TopUtil::checkEmpty($this->providerId)) {
            $requestParam["provider_id"] = TopUtil::convertBasic($this->providerId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

