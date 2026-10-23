<?php
namespace TaoBao\TopSdk\Ability180\Domain;

class TmallItemSeriesItemseriesInsertorupdateErrorCode {

    /**
        错误码
     **/
    public $mes_code;

    /**
        错误信息
     **/
    public $message;

    /**
        市场
     **/
    public $market;

    /**
        修改时间
     **/
    public $gmt_modified;

    /**
        用户id
     **/
    public $seller_id;

    /**
        系列名称
     **/
    public $name;

    /**
        系列id
     **/
    public $id;

    /**
        创建时间
     **/
    public $gmt_create;

    /**
        系列扩展信息
     **/
    public $item_series_extend;

    /**
        状态
     **/
    public $status;


    public function getMesCode() : string{
        return $this->mes_code;
    }

    public function setMesCode(string $mesCode){
        $this->mes_code = $mesCode;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getMarket() : string{
        return $this->market;
    }

    public function setMarket(string $market){
        $this->market = $market;
    }

    public function getGmtModified() : string{
        return $this->gmt_modified;
    }

    public function setGmtModified(string $gmtModified){
        $this->gmt_modified = $gmtModified;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getItemSeriesExtend() : TmallItemSeriesItemseriesInsertorupdateItemSeriesExtendDO{
        return $this->item_series_extend;
    }

    public function setItemSeriesExtend(TmallItemSeriesItemseriesInsertorupdateItemSeriesExtendDO $itemSeriesExtend){
        $this->item_series_extend = $itemSeriesExtend;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }


}

