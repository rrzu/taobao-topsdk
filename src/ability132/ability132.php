<?php
namespace TaoBao\TopSdk\Ability132;

use TaoBao\TopSdk\TopApiClient;
use TaoBao\TopSdk\Ability132\Request\TaobaoTmcAuthGetRequest;
use TaoBao\TopSdk\Ability132\Request\TaobaoTmcMessagesProduceRequest;
use TaoBao\TopSdk\Ability132\Request\TaobaoTmcGroupsGetRequest;
use TaoBao\TopSdk\Ability132\Request\TaobaoTmcGroupDeleteRequest;
use TaoBao\TopSdk\Ability132\Request\TaobaoTmcGroupAddRequest;
use TaoBao\TopSdk\Ability132\Request\TaobaoTmcMessagesConfirmRequest;
use TaoBao\TopSdk\Ability132\Request\TaobaoTmcMessagesConsumeRequest;
use TaoBao\TopSdk\Ability132\Request\TaobaoTmcTopicGroupDeleteRequest;
use TaoBao\TopSdk\Ability132\Request\TaobaoTmcTopicGroupAddRequest;

class Ability132 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        TMC授权token
    **/
    public function taobaoTmcAuthGet(TaobaoTmcAuthGetRequest $request) {
        return $this->client->execute("taobao.tmc.auth.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        批量发送消息
    **/
    public function taobaoTmcMessagesProduce(TaobaoTmcMessagesProduceRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tmc.messages.produce", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取自定义用户分组列表
    **/
    public function taobaoTmcGroupsGet(TaobaoTmcGroupsGetRequest $request) {
        return $this->client->execute("taobao.tmc.groups.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        删除指定的分组或分组下的用户
    **/
    public function taobaoTmcGroupDelete(TaobaoTmcGroupDeleteRequest $request) {
        return $this->client->execute("taobao.tmc.group.delete", $request->toMap(), $request->toFileParamMap());
    }
    /**
        为已开通用户添加用户分组
    **/
    public function taobaoTmcGroupAdd(TaobaoTmcGroupAddRequest $request) {
        return $this->client->execute("taobao.tmc.group.add", $request->toMap(), $request->toFileParamMap());
    }
    /**
        确认消费消息的状态
    **/
    public function taobaoTmcMessagesConfirm(TaobaoTmcMessagesConfirmRequest $request) {
        return $this->client->execute("taobao.tmc.messages.confirm", $request->toMap(), $request->toFileParamMap());
    }
    /**
        消费多条消息
    **/
    public function taobaoTmcMessagesConsume(TaobaoTmcMessagesConsumeRequest $request) {
        return $this->client->execute("taobao.tmc.messages.consume", $request->toMap(), $request->toFileParamMap());
    }
    /**
        删除消息topic分组路由
    **/
    public function taobaoTmcTopicGroupDelete(TaobaoTmcTopicGroupDeleteRequest $request) {
        return $this->client->execute("taobao.tmc.topic.group.delete", $request->toMap(), $request->toFileParamMap());
    }
    /**
        点对点消息topic分组路由
    **/
    public function taobaoTmcTopicGroupAdd(TaobaoTmcTopicGroupAddRequest $request) {
        return $this->client->execute("taobao.tmc.topic.group.add", $request->toMap(), $request->toFileParamMap());
    }
}