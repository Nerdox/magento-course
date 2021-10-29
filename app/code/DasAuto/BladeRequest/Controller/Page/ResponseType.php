<?php

namespace DasAuto\BladeRequest\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Forward;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\View\Result\PageFactory;

class ResponseType extends Action
{
    private $pageFactory;
    private $jsonFactory;
    private $rawResult;
    private $forwardFactory;
    private $redirectFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        JsonFactory $jsonFactory,
        Raw $rawResult,
        ForwardFactory $forwardFactory,
        RedirectFactory $redirectFactory
    ) {
        $this->pageFactory = $pageFactory;
        $this->jsonFactory = $jsonFactory;
        $this->rawResult = $rawResult;
        $this->forwardFactory = $forwardFactory;
        $this->redirectFactory = $redirectFactory;
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
        //return $this->pageFactory->create();
        //return $this->jsonFactory->create()->setData(["key"=>"hodnota"]);
        //return $this->rawResult->setContents("Heeei");
        /*$result = $this->forwardFactory->create();
        $result->setModule("noroutefound")->setController("page")->forward("noroute");
        return $result;*/
        $result = $this->redirectFactory->create();
        $result->setPath("noroutefound/page/noroute");
        return $result;
    }
}
