<?php

namespace DasAuto\BladeModule\Model;

use DasAuto\BladeModule\Api\Size;

class SmallSize implements Size
{
    public function getPencilSize()
    {
        return "small";
    }
}