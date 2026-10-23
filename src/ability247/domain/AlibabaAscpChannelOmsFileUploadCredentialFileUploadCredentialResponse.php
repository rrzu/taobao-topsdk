<?php
namespace TaoBao\TopSdk\Ability247\Domain;

class AlibabaAscpChannelOmsFileUploadCredentialFileUploadCredentialResponse {

    /**
        阿里云OSS的accessKeyId
     **/
    public $access_key_id;

    /**
        阿里云OSS的securityToken
     **/
    public $security_token;

    /**
        阿里云OSS的bucketName
     **/
    public $bucket_name;

    /**
        阿里云OSS的endPoint
     **/
    public $end_point;

    /**
        订单类型。1:渠道分销单，20: 物流LP
     **/
    public $order_type;

    /**
        阿里云OSS的accessKeySecret
     **/
    public $access_key_secret;

    /**
        单号，根据订单类型orderType使用不同单号。
     **/
    public $biz_order_code;

    /**
        过期时间
     **/
    public $expiration;

    /**
        阿里云OSS的assumedRoleId
     **/
    public $assumed_role_id;

    /**
        阿里云OSS的region
     **/
    public $region;

    /**
        响应的文件列表
     **/
    public $file_list;


    public function getAccessKeyId() : string{
        return $this->access_key_id;
    }

    public function setAccessKeyId(string $accessKeyId){
        $this->access_key_id = $accessKeyId;
    }

    public function getSecurityToken() : string{
        return $this->security_token;
    }

    public function setSecurityToken(string $securityToken){
        $this->security_token = $securityToken;
    }

    public function getBucketName() : string{
        return $this->bucket_name;
    }

    public function setBucketName(string $bucketName){
        $this->bucket_name = $bucketName;
    }

    public function getEndPoint() : string{
        return $this->end_point;
    }

    public function setEndPoint(string $endPoint){
        $this->end_point = $endPoint;
    }

    public function getOrderType() : int{
        return $this->order_type;
    }

    public function setOrderType(int $orderType){
        $this->order_type = $orderType;
    }

    public function getAccessKeySecret() : string{
        return $this->access_key_secret;
    }

    public function setAccessKeySecret(string $accessKeySecret){
        $this->access_key_secret = $accessKeySecret;
    }

    public function getBizOrderCode() : string{
        return $this->biz_order_code;
    }

    public function setBizOrderCode(string $bizOrderCode){
        $this->biz_order_code = $bizOrderCode;
    }

    public function getExpiration() : string{
        return $this->expiration;
    }

    public function setExpiration(string $expiration){
        $this->expiration = $expiration;
    }

    public function getAssumedRoleId() : string{
        return $this->assumed_role_id;
    }

    public function setAssumedRoleId(string $assumedRoleId){
        $this->assumed_role_id = $assumedRoleId;
    }

    public function getRegion() : string{
        return $this->region;
    }

    public function setRegion(string $region){
        $this->region = $region;
    }

    public function getFileList() : array{
        return $this->file_list;
    }

    public function setFileList(array $fileList){
        $this->file_list = $fileList;
    }


}

