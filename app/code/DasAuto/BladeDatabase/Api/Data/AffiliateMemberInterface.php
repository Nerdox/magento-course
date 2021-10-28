<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 28. 10. 2021
 * Time: 12:41
 */

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
    /*
     * @return integer
     */
    public function getId();

    /*
     * @return string
     */
    public function getName();

    /*
     * @return boolean
     */
    public function getStatus();

    /*
     * @return string
     */
    public function getAddress();

    /*
     * @return string
     */
    public function getPhoneNumber();

    /*
     * @return string
     */
    public function getCreatedAt();

    /*
     * @return string
    */
    public function getUpdatedAt();

    /*
     * @param integer $id
     * @return DasAuto\BladeDatabase\Api\Data\Affiliate_Member_Interface
     */
    public function setId($memberid);

    /*
     * @param string $name
     * @return DasAuto\BladeDatabase\Api\Data\Affiliate_Member_Interface
     */
    public function setName($memberName);

    /*
     * @param boolean $status
     * @return DasAuto\BladeDatabase\Api\Data\Affiliate_Member_Interface
     */
    public function setStatus($memberStatus);

    /*
     * @param string $address
     * @return DasAuto\BladeDatabase\Api\Data\Affiliate_Member_Interface
     */
    public function setAddress($memberAddress);

    /*
     * @param string PhoneNumber
     * @return DasAuto\BladeDatabase\Api\Data\Affiliate_Member_Interface
     */
    public function setPhoneNumber($memberPhoneNumber);

    /*
     * @param string createdAt
     * @return DasAuto\BladeDatabase\Api\Data\Affiliate_Member_Interface
     */
    public function setCreatedAt($memberCreatedAt);

    /*
     * @param string updatedAt
     * @return DasAuto\BladeDatabase\Api\Data\Affiliate_Member_Interface
     */
    public function setUpdatedAt($memberUpdatedAt);
}
