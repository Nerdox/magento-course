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
use DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface;

class AffiliateMember extends AbstractModel implements AffiliateMemberInterface
{
    protected function _construct()
    {
        $this->_init(AffiliateMemberResource::class);
    }

    public function getMemberId()
    {
        return $this->getData(AffiliateMemberInterface::memberId);
    }

    public function getMemberName()
    {
        return $this->getData(AffiliateMemberInterface::memberName);
    }

    public function getMemberStatus()
    {
        return $this->getData(AffiliateMemberInterface::memberStatus);
    }

    public function getMemberAddress()
    {
        return $this->getData(AffiliateMemberInterface::memberAddress);
    }

    public function getMemberPhoneNumber()
    {
        return $this->getData(AffiliateMemberInterface::memberPhoneNumber);
    }

    public function getMemberCreatedAt()
    {
        return $this->getData(AffiliateMemberInterface::memberCreatedAt);
    }

    public function getMemberUpdatedAt()
    {
        return $this->getData(AffiliateMemberInterface::memberUpdatedAt);
    }

    public function setMemberId($memberId)
    {
        $this->setData(AffiliateMemberInterface::memberId, $memberId);
    }

    public function setMemberName($memberName)
    {
        $this->setData(AffiliateMemberInterface::memberName, $memberName);
    }

    public function setMemberStatus($memberStatus)
    {
        $this->setData(AffiliateMemberInterface::memberStatus, $memberStatus);
    }

    public function setMemberAddress($memberAddress)
    {
        $this->setData(AffiliateMemberInterface::memberAddress, $memberAddress);
    }

    public function setMemberPhoneNumber($memberPhoneNumber)
    {
        $this->setData(AffiliateMemberInterface::memberPhoneNumber, $memberPhoneNumber);
    }

    public function setMemberCreatedAt($memberCreatedAt)
    {
        $this->setData(AffiliateMemberInterface::memberCreatedAt, $memberCreatedAt);
    }

    public function setMemberUpdatedAt($memberUpdatedAt)
    {
        $this->setData(AffiliateMemberInterface::memberUpdatedAt, $memberUpdatedAt);
    }
}
