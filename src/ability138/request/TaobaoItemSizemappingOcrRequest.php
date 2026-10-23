<?php
namespace TaoBao\TopSdk\Ability138\Request;
use TaoBao\TopSdk\TopUtil;
use TaoBao\TopSdk\Ability138\Domain\TaobaoItemSizemappingOcrUserInfoRequest;

class TaobaoItemSizemappingOcrRequest {

    /**
        TOP 调用身份对象，字段由业务参数和系统参数映射，用于身份识别、限流和问题排查。
     **/
    private $userInfoRequest;

    /**
        商品叶子类目 ID，必须大于 0。
     **/
    private $catId;

    /**
        商家当前已选尺码列表，至少一项。标准尺码传正数 ID；自定义尺码有负数 ID 时传该 ID，拿不到或新发时传 -1。
     **/
    private $selectedSizes;

    /**
        当前选择的尺码分组，必须来自该类目的发品数据。
     **/
    private $sizeGroup;

    /**
        商品详情描述中的全部图片地址，最多 20 张。仅支持公网 HTTP/HTTPS 地址，服务端负责筛选尺码图。
     **/
    private $urlList;


    public function getUserInfoRequest() : TaobaoItemSizemappingOcrUserInfoRequest{
        return $this->userInfoRequest;
    }

    public function setUserInfoRequest(TaobaoItemSizemappingOcrUserInfoRequest $userInfoRequest){
        $this->userInfoRequest = $userInfoRequest;
    }

    public function getCatId() : int{
        return $this->catId;
    }

    public function setCatId(int $catId){
        $this->catId = $catId;
    }

    public function getSelectedSizes() : array{
        return $this->selectedSizes;
    }

    public function setSelectedSizes(array $selectedSizes){
        $this->selectedSizes = $selectedSizes;
    }

    public function getSizeGroup() : string{
        return $this->sizeGroup;
    }

    public function setSizeGroup(string $sizeGroup){
        $this->sizeGroup = $sizeGroup;
    }

    public function getUrlList() : array{
        return $this->urlList;
    }

    public function setUrlList(array $urlList){
        $this->urlList = $urlList;
    }


    public function getApiName() : string {
        return "taobao.item.sizemapping.ocr";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->userInfoRequest)) {
            $requestParam["user_info_request"] = TopUtil::convertStruct($this->userInfoRequest);
        }

        if (!TopUtil::checkEmpty($this->catId)) {
            $requestParam["cat_id"] = TopUtil::convertBasic($this->catId);
        }

        if (!TopUtil::checkEmpty($this->selectedSizes)) {
            $requestParam["selected_sizes"] = TopUtil::convertStructList($this->selectedSizes);
        }

        if (!TopUtil::checkEmpty($this->sizeGroup)) {
            $requestParam["size_group"] = TopUtil::convertBasic($this->sizeGroup);
        }

        if (!TopUtil::checkEmpty($this->urlList)) {
            $requestParam["url_list"] = TopUtil::convertBasicList($this->urlList);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

