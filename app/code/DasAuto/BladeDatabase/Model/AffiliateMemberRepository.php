<?php

namespace DasAuto\BladeDatabase\Model;

use DasAuto\BladeDatabase\Api\AffiliateMemberRepositoryInterface;
use DasAuto\BladeDatabase\Api\Data\AffiliateMemberSearchResultInterfaceFactory;
use DasAuto\BladeDatabase\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;
use DasAuto\BladeDatabase\Model\ResourceModel\AffiliateMember\CollectionFactory;
use DasAuto\BladeDatabase\Model\AffiliateMemberFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;
use Magento\Framework\Api\SearchCriteriaInterface;

class AffiliateMemberRepository implements AffiliateMemberRepositoryInterface
{
    private $collectionFactory;
    private $affiliateMemberFactory;
    private $affiliateMemberResource;
    private $affiliateMemberSearchResultInterfaceFactory;
    private $collectionProcessor;

    public function __construct(
        CollectionFactory $collectionFactory,
        AffiliateMemberResource $affiliateMemberResource,
        AffiliateMemberFactory $affiliateMemberFactory,
        AffiliateMemberSearchResultInterfaceFactory $affiliateMemberSearchResultInterfaceFactory,
        CollectionProcessor $collectionProcessor
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        $this->affiliateMemberResource = $affiliateMemberResource;
        $this->affiliateMemberSearchResultInterfaceFactory = $affiliateMemberSearchResultInterfaceFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @return array \DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface[]
     */
    public function getMemberList()
    {
        return $this->collectionFactory->create()->getItems();
    }

    /**
     * @param integer $memberId
     * @return \DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     */
    public function getMemberById($memberId)
    {
        if (!$memberId) {
            return null;
        }

        $member = $this->affiliateMemberFactory->create();
        return $member->load($memberId);
    }

    /**
     * @param \DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface $member
     * @return \DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     * @throws \Magento\Framework\Exception\AlreadyExistsException
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

    /**
     * @param integer $memberId
     * @return boolean
     * @throws \Exception
     */
    public function deleteMember($memberId)
    {
        $member = $this->affiliateMemberFactory->create()->load($memberId);
        if ($member->delete()) {
            return true;
        }

        return false;
    }

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return \DasAuto\BladeDatabase\Api\Data\AffiliateMemberSearchResultInterface
     */
    public function getSearchResultsList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->affiliateMemberFactory->create()->getCollection();
        $this->collectionProcessor->process($searchCriteria, $collection);

        $searchResults = $this->affiliateMemberSearchResultInterfaceFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getData());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }
}
