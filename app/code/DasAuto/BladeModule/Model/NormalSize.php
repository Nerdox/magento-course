<?php

namespace DasAuto\BladeModule\Model;

use DasAuto\BladeModule\Api\Size;

class NormalSize implements Size
{
    public function getPencilSize()
    {
        return "normal";
    }
}