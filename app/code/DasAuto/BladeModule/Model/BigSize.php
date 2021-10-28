<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 26. 10. 2021
 * Time: 16:33
 */

namespace DasAuto\BladeModule\Model;

use DasAuto\BladeModule\Api\Size;

class BigSize implements Size
{
    public function getPencilSize()
    {
        return "big";
    }
}