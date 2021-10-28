<?php
namespace DasAuto\BladeModule\Controller\Page;

use DasAuto\BladeModule\Api\PencilInterface;
use DasAuto\BladeModule\Model\HeavyService;
use DasAuto\BladeModule\Model\PencilFactory;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Request\Http;
use Magento\Framework\Event\ManagerInterface;
use Magento\Vault\Api\PaymentTokenManagementInterface;

class CBlade extends \Magento\Framework\App\Action\Action
{
    private $pencilFactory;
    private $pencilInterface;
    private $paymentTokenManagement;
    private $productFactory;
    private $managerInterface;
    private $requestHTTP;
    private $heavyService;

    public function __construct(
        Context $context,
        HeavyService $heavyService,
        Http $requestHTTP,
        ProductFactory $productFactory,
        ManagerInterface $managerInterface,
        PencilFactory $pencilFactory,
        PencilInterface $pencilInterface,
        PaymentTokenManagementInterface $paymentTokenManagement
    ) {
        $this->pencilFactory = $pencilFactory;
        $this->pencilInterface = $pencilInterface;
        $this->paymentTokenManagement = $paymentTokenManagement;
        $this->productFactory = $productFactory;
        $this->managerInterface = $managerInterface;
        $this->requestHTTP = $requestHTTP;
        $this->heavyService = $heavyService;
        parent::__construct($context);
    }

    public function execute()
    {
        //echo $this->pencilInterface->getPencilType();
        //echo get_class($this->productRepository);

        /*$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $pencil = $objectManager->create("DasAuto\BladeModule\Model\DBook");
        var_dump($pencil);*/

        /*$pencil = $this->pencilFactory->create(["pencilName"=>"Alex", "schoolName"=>"SOSIT"]);
        var_dump($pencil);*/

        /*
        $product = $this->productFactory->create()->load(1);
        $product->setName("Yokoga");
        $productName = $product->GetIdBySku("24-MB01");
        */
        //var_dump($productName);
        //echo "main function<br/>";
        /*
            $message = new \Magento\Framework\DataObject(["greeting"=>"Vitaj hai lol"]);
            $this->managerInterface->dispatch("custom_event_1", ["greeting"=>$message]);
            echo $message->getGreeting();
        */

        $id = $this->requestHTTP->getParam("id", 0);
        if ($id) {
            $this->heavyService->printHeavyServiceMessage();
        } else {
            echo "heavyservice not found";
        }
    }
}
