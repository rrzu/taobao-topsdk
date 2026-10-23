<?php
namespace TaoBao\TopSdk\Ability571\Domain;

class AlibabaHmMarketingItembuygiftAdditemItemBuyGiftSku {

    /**
        通用限购信息，-1为不限制，默认为不限制
     **/
    public $limit_info;

    /**
        买N赠1的N
     **/
    public $buy_num;

    /**
        赠品的skuCode，如果和主商品的skuCode相同，则为买A赠A；如果不同，则为买A赠B
     **/
    public $gift_sku_code;

    /**
        主商品的skuCode
     **/
    public $sku_code;

    /**
        淘宝item和shop的对应关系， k-itemId, v-shopId
     **/
    public $item_shop_relation;

    /**
        主商品名称
     **/
    public $sku_name;

    /**
        赠品名称
     **/
    public $gift_sku_name;


    public function getLimitInfo() : AlibabaHmMarketingItembuygiftAdditemLimitInfo{
        return $this->limit_info;
    }

    public function setLimitInfo(AlibabaHmMarketingItembuygiftAdditemLimitInfo $limitInfo){
        $this->limit_info = $limitInfo;
    }

    public function getBuyNum() : int{
        return $this->buy_num;
    }

    public function setBuyNum(int $buyNum){
        $this->buy_num = $buyNum;
    }

    public function getGiftSkuCode() : string{
        return $this->gift_sku_code;
    }

    public function setGiftSkuCode(string $giftSkuCode){
        $this->gift_sku_code = $giftSkuCode;
    }

    public function getSkuCode() : string{
        return $this->sku_code;
    }

    public function setSkuCode(string $skuCode){
        $this->sku_code = $skuCode;
    }

    public function getItemShopRelation() : array{
        return $this->item_shop_relation;
    }

    public function setItemShopRelation(array $itemShopRelation){
        $this->item_shop_relation = $itemShopRelation;
    }

    public function getSkuName() : string{
        return $this->sku_name;
    }

    public function setSkuName(string $skuName){
        $this->sku_name = $skuName;
    }

    public function getGiftSkuName() : string{
        return $this->gift_sku_name;
    }

    public function setGiftSkuName(string $giftSkuName){
        $this->gift_sku_name = $giftSkuName;
    }


}

