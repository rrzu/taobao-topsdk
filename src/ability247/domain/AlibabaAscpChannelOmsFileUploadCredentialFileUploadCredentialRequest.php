<?php
namespace TaoBao\TopSdk\Ability247\Domain;

class AlibabaAscpChannelOmsFileUploadCredentialFileUploadCredentialRequest {

    /**
        订单类型。1:渠道分销单，20: 物流LP
     **/
    public $order_type;

    /**
        单号，根据订单类型orderType使用不同单号。
     **/
    public $biz_order_code;

    /**
        需要上传的文件列表
     **/
    public $file_list;


    public function getOrderType() : int{
        return $this->order_type;
    }

    public function setOrderType(int $orderType){
        $this->order_type = $orderType;
    }

    public function getBizOrderCode() : string{
        return $this->biz_order_code;
    }

    public function setBizOrderCode(string $bizOrderCode){
        $this->biz_order_code = $bizOrderCode;
    }

    public function getFileList() : array{
        return $this->file_list;
    }

    public function setFileList(array $fileList){
        $this->file_list = $fileList;
    }


}

