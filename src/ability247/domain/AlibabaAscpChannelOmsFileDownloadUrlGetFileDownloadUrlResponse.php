<?php
namespace TaoBao\TopSdk\Ability247\Domain;

class AlibabaAscpChannelOmsFileDownloadUrlGetFileDownloadUrlResponse {

    /**
        文件列表
     **/
    public $file_list;


    public function getFileList() : array{
        return $this->file_list;
    }

    public function setFileList(array $fileList){
        $this->file_list = $fileList;
    }


}

