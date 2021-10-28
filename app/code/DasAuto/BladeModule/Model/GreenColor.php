<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 26. 10. 2021
 * Time: 16:32
 */

namespace DasAuto\BladeModule\Model;

use DasAuto\BladeModule\Api\Color;

class GreenColor implements Color
{
    public function getPencilColor()
    {
        return "Green";
    }
}