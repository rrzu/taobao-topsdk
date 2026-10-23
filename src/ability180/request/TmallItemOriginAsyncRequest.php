<?php
namespace TaoBao\TopSdk\Ability180\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability180\Domain\TmallItemOriginAsyncSourceItemInfoDTO;

class TmallItemOriginAsyncRequest {

    /**
        天猫商品ID
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

    public function getSourceItemInfo() : TmallItemOriginAsyncSourceItemInfoDTO{
        return $this->sourceItemInfo;
    }

    public function setSourceItemInfo(TmallItemOriginAsyncSourceItemInfoDTO $sourceItemInfo){
        $this->sourceItemInfo = $sourceItemInfo;
    }


    public function getApiName() : string {
        return "tmall.item.origin.async";
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

