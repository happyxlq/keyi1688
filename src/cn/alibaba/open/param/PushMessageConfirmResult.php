<?php

namespace Keyi1688\cn\alibaba\open\param;
use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class PushMessageConfirmResult
{
    private $isSuccess;
    
    /**
    * @return 操作是否成功
    */
    public function getIsSuccess()
    {
        return $this->isSuccess;
    }
    
    /**
     * 设置操作是否成功
     * @param Boolean $isSuccess

     * 此参数必填     */
    public function setIsSuccess($isSuccess)
    {
        $this->isSuccess = $isSuccess;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("isSuccess", $this->stdResult)) {
            $this->isSuccess = $this->stdResult->{"isSuccess"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("isSuccess", $this->arrayResult)) {
            $this->isSuccess = $arrayResult['${paramType.paramName}'];
        }
    }
}
