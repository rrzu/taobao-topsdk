<?php
namespace TaoBao\TopSdk\Ability180\Domain;

class TmallItemSeriesItemseriesInsertseriesitemErrorCode {

    /**
        错误描述信息
     **/
    public $message;

    /**
        错误代码
     **/
    public $mes_code;

    /**
        更新时间
     **/
    public $gmt_modified;

    /**
        排序值
     **/
    public $sort;

    /**
        创建时间
     **/
    public $gmt_create;

    /**
        系列id
     **/
    public $series_id;

    /**
        市场
     **/
    public $market;

    /**
        特征
     **/
    public $features;

    /**
        用户id
     **/
    public $seller_id;

    /**
        分组id
     **/
    public $seg_id;

    /**
        商品id
     **/
    public $outer_id;

    /**
        分组信息
     **/
    public $fields;

    /**
        状态
     **/
    public $status;


    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getMesCode() : string{
        return $this->mes_code;
    }

    public function setMesCode(string $mesCode){
        $this->mes_code = $mesCode;
    }

    public function getGmtModified() : string{
        return $this->gmt_modified;
    }

    public function setGmtModified(string $gmtModified){
        $this->gmt_modified = $gmtModified;
    }

    public function getSort() : int{
        return $this->sort;
    }

    public function setSort(int $sort){
        $this->sort = $sort;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getSeriesId() : int{
        return $this->series_id;
    }

    public function setSeriesId(int $seriesId){
        $this->series_id = $seriesId;
    }

    public function getMarket() : string{
        return $this->market;
    }

    public function setMarket(string $market){
        $this->market = $market;
    }

    public function getFeatures() : int{
        return $this->features;
    }

    public function setFeatures(int $features){
        $this->features = $features;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getSegId() : int{
        return $this->seg_id;
    }

    public function setSegId(int $segId){
        $this->seg_id = $segId;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

