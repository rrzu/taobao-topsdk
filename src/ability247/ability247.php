<?php
namespace TaoBao\TopSdk\Ability247;

use TaoBao\TopSdk\TopApiClient;
use TaoBao\TopSdk\Ability247\Request\AlibabaAscpChannelOmsFileUploadCredentialRequest;
use TaoBao\TopSdk\Ability247\Request\AlibabaAscpChannelOmsSupplierConsignCallbackRequest;
use TaoBao\TopSdk\Ability247\Request\AlibabaAscpChannelOmsRenderCommonRequest;
use TaoBao\TopSdk\Ability247\Request\AlibabaAscpChannelOmsFileDownloadUrlGetRequest;
use TaoBao\TopSdk\Ability247\Request\AlibabaAscpChannelOmsLogisticsCallbackRequest;
use TaoBao\TopSdk\Ability247\Request\AlibabaAscpChannelChildAddressListRequest;

class Ability247 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        OMS单文件上传临时凭证
    **/
    public function alibabaAscpChannelOmsFileUploadCredential(AlibabaAscpChannelOmsFileUploadCredentialRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.channel.oms.file.upload.credential", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        OMS单供应商发货回传
    **/
    public function alibabaAscpChannelOmsSupplierConsignCallback(AlibabaAscpChannelOmsSupplierConsignCallbackRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.channel.oms.supplier.consign.callback", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        OMS通用渲染
    **/
    public function alibabaAscpChannelOmsRenderCommon(AlibabaAscpChannelOmsRenderCommonRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.channel.oms.render.common", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        OMS文件下载URL获取
    **/
    public function alibabaAscpChannelOmsFileDownloadUrlGet(AlibabaAscpChannelOmsFileDownloadUrlGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.channel.oms.file.download.url.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        OMS单物流回传
    **/
    public function alibabaAscpChannelOmsLogisticsCallback(AlibabaAscpChannelOmsLogisticsCallbackRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.channel.oms.logistics.callback", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据上级地址获取地址列表
    **/
    public function alibabaAscpChannelChildAddressList(AlibabaAscpChannelChildAddressListRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.channel.child.address.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
}