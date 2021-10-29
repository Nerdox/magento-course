<?php

namespace DasAuto\BladeAttribute\Model\Config;

use Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend;
use Magento\Framework\Exception\LocalizedException;

class BladeValidation extends AbstractBackend
{
    public function validate($object)
    {
        if ($object->getData($this->getAttribute()->getAttributeCode()) < 10) {
            throw new LocalizedException(__('Value must be higher than 10'));
        }

        return parrent::validate($object);
    }
}
