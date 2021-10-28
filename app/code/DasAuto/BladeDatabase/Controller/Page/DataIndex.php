<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 28. 10. 2021
 * Time: 11:02
 */

namespace DasAuto\BladeDatabase\Controller\Page;

use DasAuto\BladeDatabase\Model\AffiliateMemberFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class DataIndex extends Action
{
    private $affiliateMemberFactory;

    public function __construct(Context $context, AffiliateMemberFactory $affiliateMemberFactory)
    {
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $affiliateMember = $this->affiliateMemberFactory->create();

        /*
        $member = $affiliateMember->load(1);
        $member->setAddress("Ruzinovska 85, Bratislava");
        $member->save();
        var_dump($member->getData());
        */

        /*
        $affiliateMember->addData([
            'name' => "Zozko",
            'address' => "HXY, Bratislava",
            'status' => true,
            'phone_number' => "0905963210"
        ]);
        $affiliateMember->save();
        */

        /*
        $member = $affiliateMember->load(3);
        $member->delete();
        */

        /*
        $collection = $affiliateMember->getCollection()
                      ->addFieldToSelect(["name", "status"])
                      ->addFieldToFilter("name", ['eq' => "Zozko"]);

        foreach ($collection as $item) {
            print_r($item->getData());
            echo "<br>";
        }
        */
    }
}
