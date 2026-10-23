<?php
namespace TaoBao\TopSdk\Ability247\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability247\Domain\AlibabaAscpChannelChildAddressListChannelDivisionQueryRequest;

class AlibabaAscpChannelChildAddressListRequest {

    /**
        请求参数
     **/
    private $channelDivisionQueryRequest;


    public function getChannelDivisionQueryRequest() : AlibabaAscpChannelChildAddressListChannelDivisionQueryRequest{
        return $this->channelDivisionQueryRequest;
    }

    public function setChannelDivisionQueryRequest(AlibabaAscpChannelChildAddressListChannelDivisionQueryRequest $channelDivisionQueryRequest){
        $this->channelDivisionQueryRequest = $channelDivisionQueryRequest;
    }


    public function getApiName() : string {
        return "alibaba.ascp.channel.child.address.list";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->channelDivisionQueryRequest)) {
            $requestParam["channel_division_query_request"] = TopUtil::convertStruct($this->channelDivisionQueryRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

