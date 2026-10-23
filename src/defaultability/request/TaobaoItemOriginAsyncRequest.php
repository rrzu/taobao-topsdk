<?php
namespace TaoBao\TopSdk\Defaultability\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Defaultability\Domain\TaobaoItemOriginAsyncSourceItemInfoDTO;

class TaobaoItemOriginAsyncRequest {

    /**
        淘宝商品ID
     **/
    private $itemId;

    /**
        上游商品信息
     **/
    private $sourceItemInfo;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getSourceItemInfo() : TaobaoItemOriginAsyncSourceItemInfoDTO{
        return $this->sourceItemInfo;
    }

    public function setSourceItemInfo(TaobaoItemOriginAsyncSourceItemInfoDTO $sourceItemInfo){
        $this->sourceItemInfo = $sourceItemInfo;
    }


    public function getApiName() : string {
        return "taobao.item.origin.async";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->sourceItemInfo)) {
            $requestParam["source_item_info"] = TopUtil::convertStruct($this->sourceItemInfo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

