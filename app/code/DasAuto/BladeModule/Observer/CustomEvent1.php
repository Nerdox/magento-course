<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 27. 10. 2021
 * Time: 11:31
 */

namespace DasAuto\BladeModule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class CustomEvent1 implements ObserverInterface
{
    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $message = $observer->getData("greeting");
        $message->setGreeting("Nazdar lol");
    }
}
