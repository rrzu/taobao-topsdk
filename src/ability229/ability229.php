<?php
namespace TaoBao\TopSdk\Ability229;

use TaoBao\TopSdk\TopApiClient;
use TaoBao\TopSdk\Ability229\Request\CainiaoWaybillCloudprintNetprintPrintRequest;
use TaoBao\TopSdk\Ability229\Request\CainiaoWaybillCloudprintNetprintBindRequest;
use TaoBao\TopSdk\Ability229\Request\CainiaoWaybillCloudprintNetprintVerifycodeRequest;
use TaoBao\TopSdk\Ability229\Request\CainiaoCloudprintSingleCustomareaGetRequest;
use TaoBao\TopSdk\Ability229\Request\CainiaoCloudprintClientinfoPutRequest;
use TaoBao\TopSdk\Ability229\Request\CainiaoCloudprintCmdprintRenderRequest;

class Ability229 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        网络打印机打印接口
    **/
    public function cainiaoWaybillCloudprintNetprintPrint(CainiaoWaybillCloudprintNetprintPrintRequest $request) {
        return $this->client->execute("cainiao.waybill.cloudprint.netprint.print", $request->toMap(), $request->toFileParamMap());
    }
    /**
        网络打印机绑定
    **/
    public function cainiaoWaybillCloudprintNetprintBind(CainiaoWaybillCloudprintNetprintBindRequest $request) {
        return $this->client->execute("cainiao.waybill.cloudprint.netprint.bind", $request->toMap(), $request->toFileParamMap());
    }
    /**
        打印验证码
    **/
    public function cainiaoWaybillCloudprintNetprintVerifycode(CainiaoWaybillCloudprintNetprintVerifycodeRequest $request) {
        return $this->client->execute("cainiao.waybill.cloudprint.netprint.verifycode", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取商家单一自定义区
    **/
    public function cainiaoCloudprintSingleCustomareaGet(CainiaoCloudprintSingleCustomareaGetRequest $request) {
        return $this->client->execute("cainiao.cloudprint.single.customarea.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        云打印客户端监控信息收集
    **/
    public function cainiaoCloudprintClientinfoPut(CainiaoCloudprintClientinfoPutRequest $request) {
        return $this->client->execute("cainiao.cloudprint.clientinfo.put", $request->toMap(), $request->toFileParamMap());
    }
    /**
        生成打印机渲染命令（通过打印机命令打印）
    **/
    public function cainiaoCloudprintCmdprintRender(CainiaoCloudprintCmdprintRenderRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.cloudprint.cmdprint.render", $request->toMap(), $request->toFileParamMap(), $session);
    }
}