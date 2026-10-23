<?php
namespace TaoBao\TopSdk\Ability207\Domain;

class TaobaoQimenEventsProduceQimenEvent {

    /**
        奇门事件对象
     **/
    public $event;


    public function getEvent() : TaobaoQimenEventsProduceEvent{
        return $this->event;
    }

    public function setEvent(TaobaoQimenEventsProduceEvent $event){
        $this->event = $event;
    }


}

