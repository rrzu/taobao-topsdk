<?php
namespace TaoBao\TopSdk\Ability207;

use TaoBao\TopSdk\TopApiClient;
use TaoBao\TopSdk\Ability207\Request\TaobaoQimenTradeUsersGetRequest;
use TaoBao\TopSdk\Ability207\Request\TaobaoQimenTradeUserDeleteRequest;
use TaoBao\TopSdk\Ability207\Request\TaobaoQimenTradeUserAddRequest;
use TaoBao\TopSdk\Ability207\Request\TaobaoQimenEventsProduceRequest;
use TaoBao\TopSdk\Ability207\Request\TaobaoQimenEventProduceRequest;

class Ability207 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        获取奇门用户列表
    **/
    public function taobaoQimenTradeUsersGet(TaobaoQimenTradeUsersGetRequest $request) {
        return $this->client->execute("taobao.qimen.trade.users.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        删除奇门订单链路用户
    **/
    public function taobaoQimenTradeUserDelete(TaobaoQimenTradeUserDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.qimen.trade.user.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        添加奇门订单链路用户
    **/
    public function taobaoQimenTradeUserAdd(TaobaoQimenTradeUserAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.qimen.trade.user.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        批量发送奇门事件
    **/
    public function taobaoQimenEventsProduce(TaobaoQimenEventsProduceRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.qimen.events.produce", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        发出奇门事件
    **/
    public function taobaoQimenEventProduce(TaobaoQimenEventProduceRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.qimen.event.produce", $request->toMap(), $request->toFileParamMap(), $session);
    }
}