<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 27. 10. 2021
 * Time: 16:05
 */

namespace DasAuto\BladeRequest\Controller\Page;

class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{

    /**
     * Check and process no route request
     *
     * @param \Magento\Framework\App\RequestInterface $request
     * @return bool
     */
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $request->setRouteName("noroutefound")->setControllerName("page")->setActionName("noroute");

        return true;
    }
}