<?php
namespace TaoBao\TopSdk\Ability571\Domain;

class AlibabaWdkMarketingItempoolRemoveitemItemPoolSku {

    /**
        商品skuCode
     **/
    public $sku_code;

    /**
        逻辑分组ID
     **/
    public $logic_group_number;

    /**
        一品多规商品编码
     **/
    public $item_code;


    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getLogicGroupNumber() : int{
        return $this->logic_group_number;
    }

    public function setLogicGroupNumber(int $logicGroupNumber){
        $this->logic_group_number = $logicGroupNumber;
    }

    public function getItemCode() : string{
        return $this->item_code;
    }

    public function setItemCode(string $itemCode){
        $this->item_code = $itemCode;
    }


}

