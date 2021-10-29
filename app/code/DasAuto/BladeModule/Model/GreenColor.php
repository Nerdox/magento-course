<?php

namespace DasAuto\BladeModule\Model;

use DasAuto\BladeModule\Api\Color;

class GreenColor implements Color
{
    public function getPencilColor()
    {
        return "Green";
    }
}