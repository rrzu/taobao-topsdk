<?php
namespace TaoBao\TopSdk\Ability247\Domain;

class AlibabaAscpChannelOmsFileUploadCredentialFileList {

    /**
        请求的文件名称
     **/
    public $request_file_name;

    /**
        响应的文件名称，必须使用这个文件名称进行上传。
     **/
    public $response_file_name;

    /**
        文件类型。1:配送单 2:到货验收单
     **/
    public $file_type;


    public function getRequestFileName() : string{
        return $this->request_file_name;
    }

    public function setRequestFileName(string $requestFileName){
        $this->request_file_name = $requestFileName;
    }

    public function getResponseFileName() : string{
        return $this->response_file_name;
    }

    public function setResponseFileName(string $responseFileName){
        $this->response_file_name = $responseFileName;
    }

    public function getFileType() : int{
        return $this->file_type;
    }

    public function setFileType(int $fileType){
        $this->file_type = $fileType;
    }


}

