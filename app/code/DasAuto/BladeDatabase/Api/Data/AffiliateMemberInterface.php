<?php

namespace DasAuto\BladeDatabase\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface AffiliateMemberInterface extends ExtensibleDataInterface
{
    const memberId = "entity_id";
    const memberName = "name";
    const memberStatus = "status";
    const memberAddress = "address";
    const memberPhoneNumber = "phone_number";
    const memberCreatedAt = "created_at";
    const memberUpdatedAt = "updated_at";

    /**
     * @return integer
     */
    public function getMemberId();

    /**
     * @return string
     */
    public function getMemberName();

    /**
     * @return boolean
     */
    public function getMemberStatus();

    /**
     * @return string
     */
    public function getMemberAddress();

    /**
     * *@return string
     */
    public function getMemberPhoneNumber();

    /**
     * @return string
     */
    public function getMemberCreatedAt();

    /**
     * @return string
    */
    public function getMemberUpdatedAt();

    /**
     * @param integer $memberId
     * @return DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     */
    public function setMemberId($memberId);

    /**
     * @param string $memberName
     * @return DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     */
    public function setMemberName($memberName);

    /**
     * @param boolean $memberStatus
     * @return DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     */
    public function setMemberStatus($memberStatus);

    /**
     * @param string $memberAddress
     * @return DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     */
    public function setMemberAddress($memberAddress);

    /**
     * @param string $memberPhoneNumber
     * @return DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     */
    public function setMemberPhoneNumber($memberPhoneNumber);

    /**
     * @param string $memberCreatedAt
     * @return DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     */
    public function setMemberCreatedAt($memberCreatedAt);

    /**
     * @param string $memberUpdatedAt
     * @return DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     */
    public function setMemberUpdatedAt($memberUpdatedAt);

    /**
     * @return \DasAuto\BladeDatabase\Api\Data\AffiliateMemberExtensionInterface
     */
    public function getExtensionAttributes();

    /**
     * @param \DasAuto\BladeDatabase\Api\Data\AffiliateMemberExtensionInterface $affiliateMemberExtension
     * @return $this
     */
    public function setExtensionAttributes(\DasAuto\BladeDatabase\Api\Data\AffiliateMemberExtensionInterface $affiliateMemberExtension);
}
