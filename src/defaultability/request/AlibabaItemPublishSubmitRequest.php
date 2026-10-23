<?php
namespace TaoBao\TopSdk\Defaultability\Request;
use TaoBao\TopSdk\TopUtil;

class AlibabaItemPublishSubmitRequest {

    /**
        业务扩展参数，需与平台约定好
     **/
    private $bizType;

    /**
        商品发布的市场。taobao:淘宝,tmall:天猫,litetao:淘宝特价版
     **/
    private $market;

    /**
        商品类目ID
     **/
    private $catId;

    /**
        产品ID，天猫市场(market=tmall)时必填
     **/
    private $spuId;

    /**
        商品条码
     **/
    private $barcode;

    /**
        商品schema信息，通过alibaba.item.publish.props.get获取并补全后提交
     **/
    private $schema;

    /**
        产品ID集合，等同于产品ID
     **/
    private $spuIds;


    public function getBizType() : string{
        return $this->bizType;
    }

    public function setBizType(string $bizType){
        $this->bizType = $bizType;
    }

    public function getMarket() : string{
        return $this->market;
    }

    public function setMarket(string $market){
        $this->market = $market;
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

    public function getBarcode() : string{
        return $this->barcode;
    }

    public function setBarcode(string $barcode){
        $this->barcode = $barcode;
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
        return "alibaba.item.publish.submit";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->bizType)) {
            $requestParam["biz_type"] = TopUtil::convertBasic($this->bizType);
        }

        if (!TopUtil::checkEmpty($this->market)) {
            $requestParam["market"] = TopUtil::convertBasic($this->market);
        }

        if (!TopUtil::checkEmpty($this->catId)) {
            $requestParam["cat_id"] = TopUtil::convertBasic($this->catId);
        }

        if (!TopUtil::checkEmpty($this->spuId)) {
            $requestParam["spu_id"] = TopUtil::convertBasic($this->spuId);
        }

        if (!TopUtil::checkEmpty($this->barcode)) {
            $requestParam["barcode"] = TopUtil::convertBasic($this->barcode);
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

