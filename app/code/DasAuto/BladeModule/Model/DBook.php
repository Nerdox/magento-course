<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 26. 10. 2021
 * Time: 17:30
 */

namespace DasAuto\BladeModule\Model;

use DasAuto\BladeModule\Api\Color;
use DasAuto\BladeModule\Api\Size;

class DBook
{
    private $pencilColor;
    private $pencilSize;

    public function __construct(Color $pencilColor, Size $pencilSize)
    {
        $this->pencilColor = $pencilColor;
        $this->pencilSize = $pencilSize;
    }
}