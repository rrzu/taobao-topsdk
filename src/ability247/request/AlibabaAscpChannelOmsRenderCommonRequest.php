<?php
namespace TaoBao\TopSdk\Ability247\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability247\Domain\AlibabaAscpChannelOmsRenderCommonCommonRenderRequest;

class AlibabaAscpChannelOmsRenderCommonRequest {

    /**
        通用渲染情况
     **/
    private $commonRenderRequest;


    public function getCommonRenderRequest() : AlibabaAscpChannelOmsRenderCommonCommonRenderRequest{
        return $this->commonRenderRequest;
    }

    public function setCommonRenderRequest(AlibabaAscpChannelOmsRenderCommonCommonRenderRequest $commonRenderRequest){
        $this->commonRenderRequest = $commonRenderRequest;
    }


    public function getApiName() : string {
        return "alibaba.ascp.channel.oms.render.common";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->commonRenderRequest)) {
            $requestParam["common_render_request"] = TopUtil::convertStruct($this->commonRenderRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

