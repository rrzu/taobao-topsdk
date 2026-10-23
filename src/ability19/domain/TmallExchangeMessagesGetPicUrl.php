<?php
namespace TaoBao\TopSdk\Ability19\Domain;

class TmallExchangeMessagesGetPicUrl {

    /**
        凭证图片url
     **/
    public $url;


    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }


}

