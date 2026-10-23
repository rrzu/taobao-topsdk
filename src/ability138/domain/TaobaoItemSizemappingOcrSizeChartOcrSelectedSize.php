<?php
namespace TaoBao\TopSdk\Ability138\Domain;

class TaobaoItemSizemappingOcrSizeChartOcrSelectedSize {

    /**
        尺码属性值 ID，不能为 0。标准尺码传正数；自定义尺码传已有负数 ID，拿不到或新发时传 -1。
     **/
    public $v_id;

    /**
        尺码展示文本，不能为空、不能带首尾空格，同一请求内忽略大小写后不能重复。
     **/
    public $v_text;


    public function getVId() : int{
        return $this->v_id;
    }

    public function setVId(int $vId){
        $this->v_id = $vId;
    }

    public function getVText() : string{
        return $this->v_text;
    }

    public function setVText(string $vText){
        $this->v_text = $vText;
    }


}

