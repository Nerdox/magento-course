<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 28. 10. 2021
 * Time: 10:57
 */

namespace DasAuto\BladeDatabase\Model;

use Magento\Framework\Model\AbstractModel;
use DasAuto\BladeDatabase\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;

class AffiliateMember extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(AffiliateMemberResource::class);
    }
}
