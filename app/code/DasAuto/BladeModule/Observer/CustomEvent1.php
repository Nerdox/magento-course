<?php

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
