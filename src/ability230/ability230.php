<?php
namespace TaoBao\TopSdk\Ability230;

use TaoBao\TopSdk\TopApiClient;
use TaoBao\TopSdk\Ability230\Request\TaobaoWmsOrderWarehouseRouteGetRequest;

class Ability230 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        获取订单仓库路由信息
    **/
    public function taobaoWmsOrderWarehouseRouteGet(TaobaoWmsOrderWarehouseRouteGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wms.order.warehouse.route.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}