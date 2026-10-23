<?php
namespace TaoBao\TopSdk\Ability247\Domain;

class AlibabaAscpChannelChildAddressListChannelDivisionQueryRequest {

    /**
        省市区县
     **/
    public $parent_code;

    /**
        渠道编码
     **/
    public $channel_code;

    /**
        二级渠道编码
     **/
    public $sub_channel_code;


    public function getParentCode() : string{
        return $this->parent_code;
    }

    public function setParentCode(string $parentCode){
        $this->parent_code = $parentCode;
    }

    public function getChannelCode() : string{
        return $this->channel_code;
    }

    public function setChannelCode(string $channelCode){
        $this->channel_code = $channelCode;
    }

    public function getSubChannelCode() : string{
        return $this->sub_channel_code;
    }

    public function setSubChannelCode(string $subChannelCode){
        $this->sub_channel_code = $subChannelCode;
    }


}

