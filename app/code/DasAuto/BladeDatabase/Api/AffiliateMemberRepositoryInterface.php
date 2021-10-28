<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 28. 10. 2021
 * Time: 13:01
 */

namespace DasAuto\BladeDatabase\Api;

/**
 * Interface AffiliateMemberRepositoryInterface
 * @package DasAuto\BladeDatabase\Api
 */
interface AffiliateMemberRepositoryInterface
{
    /**
     *
     * @return \DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     */
    public function getList();
}
