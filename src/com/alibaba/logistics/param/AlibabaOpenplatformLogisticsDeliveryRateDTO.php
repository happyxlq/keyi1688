<?php

namespace Keyi1688\com\alibaba\logistics\param;

use Keyi1688\com\alibaba\openapi\client\entity\SDKDomain;
use Keyi1688\com\alibaba\openapi\client\entity\ByteArray;

class AlibabaOpenplatformLogisticsDeliveryRateDTO extends SDKDomain
{
    private $creator;
    
    /**
    * @return 创建人
    */
    public function getCreator()
    {
        return $this->creator;
    }
    
    /**
     * 设置创建人
     * @param String $creator
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
    }
    
            
    private $firstUnit;
    
    /**
    * @return 首重（单位：克）或首件（单位：件）
    */
    public function getFirstUnit()
    {
        return $this->firstUnit;
    }
    
    /**
     * 设置首重（单位：克）或首件（单位：件）
     * @param Long $firstUnit
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setFirstUnit($firstUnit)
    {
        $this->firstUnit = $firstUnit;
    }
    
            
    private $firstUnitFee;
    
    /**
    * @return 首重或首件的价格
    */
    public function getFirstUnitFee()
    {
        return $this->firstUnitFee;
    }
    
    /**
     * 设置首重或首件的价格
     * @param Long $firstUnitFee
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setFirstUnitFee($firstUnitFee)
    {
        $this->firstUnitFee = $firstUnitFee;
    }
    
            
    private $gmtCreate;
    
    /**
    * @return 创建时间
    */
    public function getGmtCreate()
    {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建时间
     * @param Date $gmtCreate
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setGmtCreate($gmtCreate)
    {
        $this->gmtCreate = $gmtCreate;
    }
    
            
    private $gmtModified;
    
    /**
    * @return 修改时间
    */
    public function getGmtModified()
    {
        return $this->gmtModified;
    }
    
    /**
     * 设置修改时间
     * @param Date $gmtModified
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setGmtModified($gmtModified)
    {
        $this->gmtModified = $gmtModified;
    }
    
            
    private $id;
    
    /**
    * @return 主键id
    */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * 设置主键id
     * @param Long $id
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
            
    private $leastExpenses;
    
    /**
    * @return 最低一票
    */
    public function getLeastExpenses()
    {
        return $this->leastExpenses;
    }
    
    /**
     * 设置最低一票
     * @param Long $leastExpenses
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setLeastExpenses($leastExpenses)
    {
        $this->leastExpenses = $leastExpenses;
    }
    
            
    private $memberId;
    
    /**
    * @return 会员memberId
    */
    public function getMemberId()
    {
        return $this->memberId;
    }
    
    /**
     * 设置会员memberId
     * @param String $memberId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }
    
            
    private $modifier;
    
    /**
    * @return 修改人
    */
    public function getModifier()
    {
        return $this->modifier;
    }
    
    /**
     * 设置修改人
     * @param String $modifier
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setModifier($modifier)
    {
        $this->modifier = $modifier;
    }
    
            
    private $nextUnit;
    
    /**
    * @return 续重（单位：克）或续件（单位：件）单位
    */
    public function getNextUnit()
    {
        return $this->nextUnit;
    }
    
    /**
     * 设置续重（单位：克）或续件（单位：件）单位
     * @param Long $nextUnit
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setNextUnit($nextUnit)
    {
        $this->nextUnit = $nextUnit;
    }
    
            
    private $nextUnitFee;
    
    /**
    * @return 续重件价格
    */
    public function getNextUnitFee()
    {
        return $this->nextUnitFee;
    }
    
    /**
     * 设置续重件价格
     * @param Long $nextUnitFee
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setNextUnitFee($nextUnitFee)
    {
        $this->nextUnitFee = $nextUnitFee;
    }
    
            
    private $subTemplateId;
    
    /**
    * @return 子模板id
    */
    public function getSubTemplateId()
    {
        return $this->subTemplateId;
    }
    
    /**
     * 设置子模板id
     * @param Long $subTemplateId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSubTemplateId($subTemplateId)
    {
        $this->subTemplateId = $subTemplateId;
    }
    
            
    private $toAreaCodeList;
    
    /**
    * @return 到达区地址列表（使用行政区编码）
    */
    public function getToAreaCodeList()
    {
        return $this->toAreaCodeList;
    }
    
    /**
     * 设置到达区地址列表（使用行政区编码）
     * @param array include @see String[] $toAreaCodeList
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setToAreaCodeList($toAreaCodeList)
    {
        $this->toAreaCodeList = $toAreaCodeList;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("creator", $this->stdResult)) {
            $this->creator = $this->stdResult->{"creator"};
        }
        if (array_key_exists("firstUnit", $this->stdResult)) {
            $this->firstUnit = $this->stdResult->{"firstUnit"};
        }
        if (array_key_exists("firstUnitFee", $this->stdResult)) {
            $this->firstUnitFee = $this->stdResult->{"firstUnitFee"};
        }
        if (array_key_exists("gmtCreate", $this->stdResult)) {
            $this->gmtCreate = $this->stdResult->{"gmtCreate"};
        }
        if (array_key_exists("gmtModified", $this->stdResult)) {
            $this->gmtModified = $this->stdResult->{"gmtModified"};
        }
        if (array_key_exists("id", $this->stdResult)) {
            $this->id = $this->stdResult->{"id"};
        }
        if (array_key_exists("leastExpenses", $this->stdResult)) {
            $this->leastExpenses = $this->stdResult->{"leastExpenses"};
        }
        if (array_key_exists("memberId", $this->stdResult)) {
            $this->memberId = $this->stdResult->{"memberId"};
        }
        if (array_key_exists("modifier", $this->stdResult)) {
            $this->modifier = $this->stdResult->{"modifier"};
        }
        if (array_key_exists("nextUnit", $this->stdResult)) {
            $this->nextUnit = $this->stdResult->{"nextUnit"};
        }
        if (array_key_exists("nextUnitFee", $this->stdResult)) {
            $this->nextUnitFee = $this->stdResult->{"nextUnitFee"};
        }
        if (array_key_exists("subTemplateId", $this->stdResult)) {
            $this->subTemplateId = $this->stdResult->{"subTemplateId"};
        }
        if (array_key_exists("toAreaCodeList", $this->stdResult)) {
            $this->toAreaCodeList = $this->stdResult->{"toAreaCodeList"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("creator", $this->arrayResult)) {
            $this->creator = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("firstUnit", $this->arrayResult)) {
            $this->firstUnit = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("firstUnitFee", $this->arrayResult)) {
            $this->firstUnitFee = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("gmtCreate", $this->arrayResult)) {
            $this->gmtCreate = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("gmtModified", $this->arrayResult)) {
            $this->gmtModified = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("id", $this->arrayResult)) {
            $this->id = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("leastExpenses", $this->arrayResult)) {
            $this->leastExpenses = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("memberId", $this->arrayResult)) {
            $this->memberId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("modifier", $this->arrayResult)) {
            $this->modifier = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("nextUnit", $this->arrayResult)) {
            $this->nextUnit = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("nextUnitFee", $this->arrayResult)) {
            $this->nextUnitFee = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("subTemplateId", $this->arrayResult)) {
            $this->subTemplateId = $arrayResult['${paramType.paramName}'];
        }
        if (array_key_exists("toAreaCodeList", $this->arrayResult)) {
            $this->toAreaCodeList = $arrayResult['${paramType.paramName}'];
        }
    }
}
