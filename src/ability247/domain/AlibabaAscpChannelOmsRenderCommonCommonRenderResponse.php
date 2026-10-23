<?php
namespace TaoBao\TopSdk\Ability247\Domain;

class AlibabaAscpChannelOmsRenderCommonCommonRenderResponse {

    /**
        订单类型。1:渠道分销单，20: 物流LP
     **/
    public $order_type;

    /**
        单号，根据订单类型orderType使用不同单号。
     **/
    public $biz_order_code;

    /**
        渲染类型
     **/
    public $render_type;

    /**
        渲染字段列表
     **/
    public $render_field_list;


    public function getOrderType() : int{
        return $this->order_type;
    }

    public function setOrderType(int $orderType){
        $this->order_type = $orderType;
    }

    public function getBizOrderCode() : string{
        return $this->biz_order_code;
    }

    public function setBizOrderCode(string $bizOrderCode){
        $this->biz_order_code = $bizOrderCode;
    }

    public function getRenderType() : int{
        return $this->render_type;
    }

    public function setRenderType(int $renderType){
        $this->render_type = $renderType;
    }

    public function getRenderFieldList() : array{
        return $this->render_field_list;
    }

    public function setRenderFieldList(array $renderFieldList){
        $this->render_field_list = $renderFieldList;
    }


}

