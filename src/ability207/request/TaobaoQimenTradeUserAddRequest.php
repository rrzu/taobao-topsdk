<?php
namespace TaoBao\TopSdk\Ability207\Request;
use TaoBao\TopSdk\TopUtil;

class TaobaoQimenTradeUserAddRequest {

    /**
        商家备注
     **/
    private $memo;


    public function getMemo() : string{
        return $this->memo;
    }

    public function setMemo(string $memo){
        $this->memo = $memo;
    }


    public function getApiName() : string {
        return "taobao.qimen.trade.user.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->memo)) {
            $requestParam["memo"] = TopUtil::convertBasic($this->memo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

