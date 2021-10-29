<?php

namespace DasAuto\BladeModule\Model;

use DasAuto\BladeModule\Api\Color;
use DasAuto\BladeModule\Api\Brightness;

class YellowColor implements Color
{
    private $colorBrightness;

    public function __construct(Brightness $colorBrightness)
    {
        $this->colorBrightness = $colorBrightness;
    }

    public function getPencilColor()
    {
        return "Yellow";
    }
}
