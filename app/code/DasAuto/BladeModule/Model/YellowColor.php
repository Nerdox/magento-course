<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 26. 10. 2021
 * Time: 16:31
 */

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
