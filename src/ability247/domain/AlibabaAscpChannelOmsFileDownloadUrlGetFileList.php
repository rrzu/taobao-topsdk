<?php
namespace TaoBao\TopSdk\Ability247\Domain;

class AlibabaAscpChannelOmsFileDownloadUrlGetFileList {

    /**
        文件名称
     **/
    public $file_name;

    /**
        下载地址
     **/
    public $download_url;

    /**
        文件类型。1:配送单 2:到货验收单
     **/
    public $file_type;


    public function getFileName() : string{
        return $this->file_name;
    }

    public function setFileName(string $fileName){
        $this->file_name = $fileName;
    }

    public function getDownloadUrl() : string{
        return $this->download_url;
    }

    public function setDownloadUrl(string $downloadUrl){
        $this->download_url = $downloadUrl;
    }

    public function getFileType() : int{
        return $this->file_type;
    }

    public function setFileType(int $fileType){
        $this->file_type = $fileType;
    }


}

