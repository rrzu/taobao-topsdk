<?php
namespace TaoBao\TopSdk\Ability180;

use TaoBao\TopSdk\TopApiClient;
use TaoBao\TopSdk\Ability180\Request\TmallItemOriginAsyncRequest;
use TaoBao\TopSdk\Ability180\Request\TmallItemSeriesItemseriesInsertorupdateRequest;
use TaoBao\TopSdk\Ability180\Request\TmallItemSeriesItemseriesRemoveitemfromseriesRequest;
use TaoBao\TopSdk\Ability180\Request\TmallItemSeriesItemseriesInsertseriesitemRequest;

class Ability180 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        商品来源数据同步
    **/
    public function tmallItemOriginAsync(TmallItemOriginAsyncRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.origin.async", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品系列增删改接口
    **/
    public function tmallItemSeriesItemseriesInsertorupdate(TmallItemSeriesItemseriesInsertorupdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.series.itemseries.insertorupdate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        从商品系列中移除商品
    **/
    public function tmallItemSeriesItemseriesRemoveitemfromseries(TmallItemSeriesItemseriesRemoveitemfromseriesRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.series.itemseries.removeitemfromseries", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        向系列中添加系列商品
    **/
    public function tmallItemSeriesItemseriesInsertseriesitem(TmallItemSeriesItemseriesInsertseriesitemRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.series.itemseries.insertseriesitem", $request->toMap(), $request->toFileParamMap(), $session);
    }
}