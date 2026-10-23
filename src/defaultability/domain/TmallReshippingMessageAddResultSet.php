<?php
namespace TaoBao\TopSdk\Defaultability\Domain;

class TmallReshippingMessageAddResultSet {

    /**
        错误码
     **/
    public $error_code;

    /**
        错误信息
     **/
    public $error_msg;

    /**
        留言信息
     **/
    public $results;


    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }

    public function getResults() : array{
        return $this->results;
    }

    public function setResults(array $results){
        $this->results = $results;
    }


}

