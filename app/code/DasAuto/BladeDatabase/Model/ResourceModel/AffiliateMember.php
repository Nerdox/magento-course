<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 28. 10. 2021
 * Time: 10:56
 */

namespace DasAuto\BladeDatabase\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class AffiliateMember extends AbstractDb
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init("affiliate_member", "entity_id");
    }
}