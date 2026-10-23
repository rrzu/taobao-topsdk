<?php
namespace TaoBao\TopSdk\Ability138\Domain;

class TaobaoItemSizemappingOcrUserInfoRequest {

    /**
        调用方请求标识，用于链路排查；建议每次调用使用唯一值。
     **/
    public $request_id;


    public function getRequestId() : string{
        return $this->request_id;
    }

    public function setRequestId(string $requestId){
        $this->request_id = $requestId;
    }


}

