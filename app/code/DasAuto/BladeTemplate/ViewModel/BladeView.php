<?php

namespace DasAuto\BladeTemplate\ViewModel;

use Magento\Catalog\Model\ProductRepository;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class BladeView implements ArgumentInterface
{
    private $productRepository;

    public function __construct(
        ProductRepository $productRepository
    ) {
        $this->productRepository = $productRepository;
    }

    public function getProductName()
    {
        $product = $this->productRepository->get("24-MB01");
        return $product->getName();
    }

    public function getBladeHello()
    {
        return "called from getBladeHello Block";
    }

    public function bladeArray()
    {
        $array = [
            "bad",
            "good",
            "best",
        ];

        return $array;
    }
}
