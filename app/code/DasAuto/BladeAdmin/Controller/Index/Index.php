<?php

namespace DasAuto\BladeAdmin\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\ResponseInterface;

class Index extends Action
{
    private $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        Context $context
    ) {
        $this->scopeConfig = $scopeConfig;
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
        echo $this->scopeConfig->getValue("Blade_First_Section/Blade_First_Group/first_field") . "<br>";
        echo $this->scopeConfig->getValue("Blade_First_Section/Blade_First_Group/second_field") . "<br>";
        print_r($this->scopeConfig->getValue("Blade_First_Section/Blade_First_Group/third_field"));
        echo "<br>" . $this->scopeConfig->getValue("Blade_First_Section/Blade_First_Group/fourth_field");
    }
}
