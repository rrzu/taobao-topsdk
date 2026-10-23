<?php
namespace TaoBao\TopSdk\Ability180\Domain;

class TmallItemOriginAsyncApiResult {

    /**
        错误code
     **/
    public $mapped_error_codes;

    /**
        成功失败
     **/
    public $success;

    /**
        错误描述
     **/
    public $mapped_error_messages;


    public function getMappedErrorCodes() : string{
        return $this->mapped_error_codes;
    }

    public function setMappedErrorCodes(string $mappedErrorCodes){
        $this->mapped_error_codes = $mappedErrorCodes;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getMappedErrorMessages() : string{
        return $this->mapped_error_messages;
    }

    public function setMappedErrorMessages(string $mappedErrorMessages){
        $this->mapped_error_messages = $mappedErrorMessages;
    }


}

