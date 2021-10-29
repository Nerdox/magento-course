<?php

namespace DasAuto\BladeDatabase\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use DasAuto\BladeDatabase\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;
use DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface;

class AffiliateMember extends AbstractExtensibleModel implements AffiliateMemberInterface
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

    /**
     * @return \DasAuto\BladeDatabase\Api\Data\AffiliateMemberExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @param \DasAuto\BladeDatabase\Api\Data\AffiliateMemberExtensionInterface $affiliateMemberExtension
     * @return $this
     */
    public function setExtensionAttributes(\DasAuto\BladeDatabase\Api\Data\AffiliateMemberExtensionInterface $affiliateMemberExtension)
    {
        return $this->_setExtensionAttributes($affiliateMemberExtension);
    }
}
