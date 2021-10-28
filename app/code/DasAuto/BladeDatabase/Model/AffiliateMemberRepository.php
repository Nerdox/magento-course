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

class AffiliateMemberRepository implements AffiliateMemberRepositoryInterface
{
    private $collectionFactory;

    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    /*
     * @return \DasAuto\BladeDatabase\Api\Data\AffiliateMemberInterface
     */
    public function getList()
    {
        $factory = $this->collectionFactory->create();
        $items = $factory->getItems();
        //return $items;

        $data = [];
        foreach ($items as $item) {
            $data[] = $item->getData();
        }
        return $data;

        /*$writer = new \Zend\Log\Writer\Stream("C:/xampp/htdocs/magento24/var/log/test.log");
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->debug(get_declared_interfaces());*/
    }
}