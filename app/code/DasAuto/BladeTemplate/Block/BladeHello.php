<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 2. 11. 2021
 * Time: 11:22
 */

namespace DasAuto\BladeTemplate\Block;

class BladeHello extends \Magento\Framework\View\Element\Template
{
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
