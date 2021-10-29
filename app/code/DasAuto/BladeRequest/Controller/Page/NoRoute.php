<?php

namespace DasAuto\BladeRequest\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;

class NoRoute extends Action
{
    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        echo "404 ERROR PAGE HAHA";
    }
}
