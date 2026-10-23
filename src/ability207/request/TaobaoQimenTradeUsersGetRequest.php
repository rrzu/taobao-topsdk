<?php
namespace TaoBao\TopSdk\Ability207\Request;
use TaoBao\TopSdk\TopUtil;

class TaobaoQimenTradeUsersGetRequest {

    /**
        页数
     **/
    private $pageSize;

    /**
        每页的数量
     **/
    private $pageIndex;


    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getPageIndex() : int{
        return $this->pageIndex;
    }

    public function setPageIndex(int $pageIndex){
        $this->pageIndex = $pageIndex;
    }


    public function getApiName() : string {
        return "taobao.qimen.trade.users.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pageIndex)) {
            $requestParam["page_index"] = TopUtil::convertBasic($this->pageIndex);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

