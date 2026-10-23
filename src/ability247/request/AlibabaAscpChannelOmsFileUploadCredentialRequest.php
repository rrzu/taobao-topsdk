<?php
namespace TaoBao\TopSdk\Ability247\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability247\Domain\AlibabaAscpChannelOmsFileUploadCredentialFileUploadCredentialRequest;

class AlibabaAscpChannelOmsFileUploadCredentialRequest {

    /**
        文件上传临时凭证参数
     **/
    private $fileUploadCredentialRequest;


    public function getFileUploadCredentialRequest() : AlibabaAscpChannelOmsFileUploadCredentialFileUploadCredentialRequest{
        return $this->fileUploadCredentialRequest;
    }

    public function setFileUploadCredentialRequest(AlibabaAscpChannelOmsFileUploadCredentialFileUploadCredentialRequest $fileUploadCredentialRequest){
        $this->fileUploadCredentialRequest = $fileUploadCredentialRequest;
    }


    public function getApiName() : string {
        return "alibaba.ascp.channel.oms.file.upload.credential";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fileUploadCredentialRequest)) {
            $requestParam["file_upload_credential_request"] = TopUtil::convertStruct($this->fileUploadCredentialRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

