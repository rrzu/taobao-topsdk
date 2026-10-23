<?php
namespace TaoBao\TopSdk\Defaultability\Request;
use TaoBao\TopSdk\TopUtil;

class AlibabaItemEditFastupdateRequest {

    /**
        商品ID
     **/
    private $itemId;

    /**
        商品类目ID。若不需要修改商品类目，则不用填写
     **/
    private $catId;

    /**
        产品ID，若不需要修改关联的产品信息，则不需要填写
     **/
    private $spuId;

    /**
        编辑后的schema信息(增量更新，只填写需要更新的字段)
     **/
    private $schema;

    /**
        产品ID集合，等同于产品ID
     **/
    private $spuIds;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getCatId() : int{
        return $this->catId;
    }

    public function setCatId(int $catId){
        $this->catId = $catId;
    }

    public function getSpuId() : int{
        return $this->spuId;
    }

    public function setSpuId(int $spuId){
        $this->spuId = $spuId;
    }

    public function getSchema() : string{
        return $this->schema;
    }

    public function setSchema(string $schema){
        $this->schema = $schema;
    }

    public function getSpuIds() : array{
        return $this->spuIds;
    }

    public function setSpuIds(array $spuIds){
        $this->spuIds = $spuIds;
    }


    public function getApiName() : string {
        return "alibaba.item.edit.fastupdate";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->catId)) {
            $requestParam["cat_id"] = TopUtil::convertBasic($this->catId);
        }

        if (!TopUtil::checkEmpty($this->spuId)) {
            $requestParam["spu_id"] = TopUtil::convertBasic($this->spuId);
        }

        if (!TopUtil::checkEmpty($this->schema)) {
            $requestParam["schema"] = TopUtil::convertBasic($this->schema);
        }

        if (!TopUtil::checkEmpty($this->spuIds)) {
            $requestParam["spu_ids"] = TopUtil::convertBasicList($this->spuIds);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

