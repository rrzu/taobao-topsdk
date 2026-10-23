<?php
namespace TaoBao\TopSdk\Defaultability\Domain;

class TaobaoItemOriginAsyncSourceItemInfoDTO {

    /**
        上游商品ID
     **/
    public $item_id;

    /**
        上游商品最高价(分)
     **/
    public $item_highest_price;

    /**
        上游商品最低价(分)
     **/
    public $item_lowest_price;

    /**
        上游商品店铺ID
     **/
    public $shop_id;

    /**
        上游商品平台
     **/
    public $type;

    /**
        上游商品URL
     **/
    public $item_url;


    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getItemHighestPrice() : int{
        return $this->item_highest_price;
    }

    public function setItemHighestPrice(int $itemHighestPrice){
        $this->item_highest_price = $itemHighestPrice;
    }

    public function getItemLowestPrice() : int{
        return $this->item_lowest_price;
    }

    public function setItemLowestPrice(int $itemLowestPrice){
        $this->item_lowest_price = $itemLowestPrice;
    }

    public function getShopId() : string{
        return $this->shop_id;
    }

    public function setShopId(string $shopId){
        $this->shop_id = $shopId;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getItemUrl() : string{
        return $this->item_url;
    }

    public function setItemUrl(string $itemUrl){
        $this->item_url = $itemUrl;
    }


}

