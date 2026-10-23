<?php
namespace TaoBao\TopSdk\Ability202;

use TaoBao\TopSdk\TopApiClient;
use TaoBao\TopSdk\Ability202\Request\AlibabaTianjiDistributorOrderSubmitRequest;

class Ability202 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        分销商提交受理订单
    **/
    public function alibabaTianjiDistributorOrderSubmit(AlibabaTianjiDistributorOrderSubmitRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.tianji.distributor.order.submit", $request->toMap(), $request->toFileParamMap(), $session);
    }
}