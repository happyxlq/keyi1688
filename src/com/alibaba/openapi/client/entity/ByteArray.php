<?php
namespace Keyi1688\com\alibaba\openapi\client\entity;

class ByteArray
{
    private $bytesValue;
    
    public function setBytesValue($bytesValue)
    {
        $this->bytesValue = $bytesValue;
    }
    
    public function getByteValue()
    {
        return $this->bytesValue;
    }
}
