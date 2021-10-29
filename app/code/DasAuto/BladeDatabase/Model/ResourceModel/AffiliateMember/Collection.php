<?php

namespace DasAuto\BladeDatabase\Model\ResourceModel\AffiliateMember;

use DasAuto\BladeDatabase\Model\AffiliateMember;
use DasAuto\BladeDatabase\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init(AffiliateMember::class, AffiliateMemberResource::class);
    }
}