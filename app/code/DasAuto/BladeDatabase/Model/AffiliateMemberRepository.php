<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 28. 10. 2021
 * Time: 13:03
 */

namespace DasAuto\BladeDatabase\Model;

use DasAuto\BladeDatabase\Api\AffiliateMemberRepositoryInterface;
use DasAuto\BladeDatabase\Model\ResourceModel\AffiliateMember\CollectionFactory;
use DasAuto\BladeDatabase\Model\AffiliateMemberFactory;
use DasAuto\BladeDatabase\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;

class AffiliateMemberRepository implements AffiliateMemberRepositoryInterface
{
    private $collectionFactory;
    private $affiliateMemberFactory;
    private $affiliateMemberResource;

    public function __construct(
        CollectionFactory $collectionFactory,
        AffiliateMemberFactory $affiliateMemberFactory,
        AffiliateMemberResource $affiliateMemberResource
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        $this->affiliateMemberResource = $affiliateMemberResource;
    }

    /**
     * @return \DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface[]
     */
    public function getMemberList()
    {
        $factory = $this->collectionFactory->create();
        $items = $factory->getItems();
        return $items;

        /*$writer = new \Zend\Log\Writer\Stream("C:/xampp/htdocs/magento24/var/log/test.log");
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->debug(get_declared_interfaces());*/
    }

    /**
     * @param integer $memberId
     * @return \DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     */
    public function getMemberById($memberId)
    {
        $member = $this->affiliateMemberFactory->create();
        return $member->load($memberId);
    }

    /**
     * @param \DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface $member
     * @return \DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     */
    public function createOrUpdateMember(\DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface $member)
    {
        if (!$member->getMemberId()) {
            $this->affiliateMemberResource->save($member);
            return $member;
        } else {
            $ourMember = $this->affiliateMemberFactory->create()->load($member->getMemberId());

            foreach ($member->getData() as $key => $value) {
                $ourMember->setData($key, $value);
            }

            $this->affiliateMemberResource->save($ourMember);
            return $ourMember;
        }
    }
}
