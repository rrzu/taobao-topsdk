<?php
namespace TaoBao\TopSdk\Ability207\Domain;

class TaobaoQimenTradeUsersGetQimenUser {

    /**
        memo
     **/
    public $memo;

    /**
        gmtCreate
     **/
    public $gmt_create;

    /**
        sellerNick
     **/
    public $seller_nick;


    public function getMemo() : string{
        return $this->memo;
    }

    public function setMemo(string $memo){
        $this->memo = $memo;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }


}

