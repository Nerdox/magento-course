<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 27. 10. 2021
 * Time: 10:56
 */

namespace DasAuto\BladeModule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class LogTextAtCheckout implements ObserverInterface
{

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $writer = new \Zend\Log\Writer\Stream("/var/log/test.log");
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info("Test");
    }
}