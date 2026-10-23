<?php
namespace TaoBao\TopSdk\Defaultability\Domain;

class TmallReshippingMessageAddPicUrl {

    /**
        图片url
     **/
    public $url;


    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }


}

