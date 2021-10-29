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
     * @return \DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface[]
     */
    public function getMemberList();

    /**
     * @param integer $memberId
     * @return \DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     */
    public function getMemberById($memberId);

    /**
     * @param \DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface $member
     * @return \DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     * @throws NotFoundException
     */
    public function createOrUpdateMember(\DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface $member);

    /**
     * @param integer $memberId
     * @return boolean
     */
    public function deleteMember($memberId);
}
