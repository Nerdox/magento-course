<?php
namespace DasAuto\BladeRequest\Controller\Page\Router;

/**
 * Interceptor class for @see \DasAuto\BladeRequest\Controller\Page\Router
 */
class Interceptor extends \DasAuto\BladeRequest\Controller\Page\Router implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory)
    {
        $this->___init();
        parent::__construct($actionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'match');
        return $pluginInfo ? $this->___callPlugins('match', func_get_args(), $pluginInfo) : parent::match($request);
    }
}
