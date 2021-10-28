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

    public function getId()
    {
        return $this->getData(AffiliateMemberInterface::memberId);
    }

    public function getName()
    {
        return $this->getData(AffiliateMemberInterface::memberName);
    }

    public function getStatus()
    {
        return $this->getData(AffiliateMemberInterface::memberStatus);
    }

    public function getAddress()
    {
        return $this->getData(AffiliateMemberInterface::memberAddress);
    }

    public function getPhoneNumber()
    {
        return $this->getData(AffiliateMemberInterface::memberPhoneNumber);
    }

    public function getCreatedAt()
    {
        return $this->getData(AffiliateMemberInterface::memberCreatedAt);
    }

    public function getUpdatedAt()
    {
        return $this->getData(AffiliateMemberInterface::memberUpdatedAt);
    }

    public function setId($memberId)
    {
        $this->setData(AffiliateMemberInterface::memberId, $memberId);
    }

    public function setName($memberName)
    {
        $this->setData(AffiliateMemberInterface::memberName, $memberName);
    }

    public function setStatus($memberStatus)
    {
        $this->setData(AffiliateMemberInterface::memberStatus, $memberStatus);
    }

    public function setAddress($memberAddress)
    {
        $this->setData(AffiliateMemberInterface::memberAddress, $memberAddress);
    }

    public function setPhoneNumber($memberPhoneNumber)
    {
        $this->setData(AffiliateMemberInterface::memberPhoneNumber, $memberPhoneNumber);
    }

    public function setCreatedAt($memberCreatedAt)
    {
        $this->setData(AffiliateMemberInterface::memberCreatedAt, $memberCreatedAt);
    }

    public function setUpdatedAt($memberUpdatedAt)
    {
        $this->setData(AffiliateMemberInterface::memberUpdatedAt, $memberUpdatedAt);
    }
}
