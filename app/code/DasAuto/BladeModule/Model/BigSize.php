<?php

namespace DasAuto\BladeModule\Model;

use DasAuto\BladeModule\Api\Size;

class BigSize implements Size
{
    public function getPencilSize()
    {
        return "big";
    }
}