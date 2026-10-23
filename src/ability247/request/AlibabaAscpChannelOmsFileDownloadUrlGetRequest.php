<?php
namespace TaoBao\TopSdk\Ability247\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability247\Domain\AlibabaAscpChannelOmsFileDownloadUrlGetFileDownloadUrlRequest;

class AlibabaAscpChannelOmsFileDownloadUrlGetRequest {

    /**
        文件下载请求
     **/
    private $fileDownloadUrlRequest;


    public function getFileDownloadUrlRequest() : AlibabaAscpChannelOmsFileDownloadUrlGetFileDownloadUrlRequest{
        return $this->fileDownloadUrlRequest;
    }

    public function setFileDownloadUrlRequest(AlibabaAscpChannelOmsFileDownloadUrlGetFileDownloadUrlRequest $fileDownloadUrlRequest){
        $this->fileDownloadUrlRequest = $fileDownloadUrlRequest;
    }


    public function getApiName() : string {
        return "alibaba.ascp.channel.oms.file.download.url.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fileDownloadUrlRequest)) {
            $requestParam["file_download_url_request"] = TopUtil::convertStruct($this->fileDownloadUrlRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

