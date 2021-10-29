<?php

namespace DasAuto\BladeDatabase\Api\Data;

interface AffiliateMemberInterface
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
     * @return DasAuto\BladeDatabase\Api\Data\Affiliate_Member_Interface
     */
    public function setMemberId($memberId);

    /**
     * @param string $memberName
     * @return DasAuto\BladeDatabase\Api\Data\Affiliate_Member_Interface
     */
    public function setMemberName($memberName);

    /**
     * @param boolean $memberStatus
     * @return DasAuto\BladeDatabase\Api\Data\Affiliate_Member_Interface
     */
    public function setMemberStatus($memberStatus);

    /**
     * @param string $memberAddress
     * @return DasAuto\BladeDatabase\Api\Data\Affiliate_Member_Interface
     */
    public function setMemberAddress($memberAddress);

    /**
     * @param string $memberPhoneNumber
     * @return DasAuto\BladeDatabase\Api\Data\Affiliate_Member_Interface
     */
    public function setMemberPhoneNumber($memberPhoneNumber);

    /**
     * @param string $memberCreatedAt
     * @return DasAuto\BladeDatabase\Api\Data\Affiliate_Member_Interface
     */
    public function setMemberCreatedAt($memberCreatedAt);

    /**
     * @param string $memberUpdatedAt
     * @return DasAuto\BladeDatabase\Api\Data\Affiliate_Member_Interface
     */
    public function setMemberUpdatedAt($memberUpdatedAt);
}
