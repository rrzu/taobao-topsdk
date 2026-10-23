<?php
namespace TaoBao\TopSdk\Ability207\Request;
use TaoBao\TopSdk\TopUtil;

class TaobaoQimenEventsProduceRequest {

    /**
        奇门事件列表, 最多50条
     **/
    private $messages;


    public function getMessages() : array{
        return $this->messages;
    }

    public function setMessages(array $messages){
        $this->messages = $messages;
    }


    public function getApiName() : string {
        return "taobao.qimen.events.produce";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->messages)) {
            $requestParam["messages"] = TopUtil::convertStructList($this->messages);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

