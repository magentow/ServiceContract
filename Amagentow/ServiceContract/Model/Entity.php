<?php

namespace AmagentoW\ServiceContract\Model;

use Amagentow\ServiceContract\Api\Data\EntityInterface;
use Magento\Framework\Object\IdentityInterface;

class Entity extends \Magento\Framework\Model\AbstractModel implements EntityInterface
{
    const Entity_ID      = 'entity_id';
    const Entity_attribute1        = 'attribute_1';
    const Entity_attribute2      = 'attribute_2';

    protected function _construct()
    {
    }


    public function getId()
    {
        return $this->getData(self::Entity_ID);
    }

    public function setId($id)
    {
        return $this->setData(self::Entity_ID,$id);
    }
	
    public function getattr1()
    {
        return $this->getData(self::Entity_attribute1);
    }
	
    public function setattr1($attr)
    {
        return $this->setData(self::Entity_attribute1,$attr);
    }
	
    public function getattr2()
    {
        return $this->getData(self::Entity_attribute2);
    }
	
    public function setattr2($attr)
    {
        return $this->setData(self::Entity_attribute2,$attr);
    }
}
