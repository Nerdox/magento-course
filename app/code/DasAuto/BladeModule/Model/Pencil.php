<?php
namespace DasAuto\BladeModule\Model;

use DasAuto\BladeModule\Api\Color;
use DasAuto\BladeModule\Api\PencilInterface;
use DasAuto\BladeModule\Api\Size;

class Pencil implements PencilInterface
{
    private $pencilColor;
    private $pencilSize;
    private $pencilName;
    private $schoolName;

    public function __construct(Color $pencilColor, Size $pencilSize, $pencilName = "", $schoolName = "")
    {
        $this->pencilColor = $pencilColor;
        $this->pencilSize = $pencilSize;
        $this->pencilName = $pencilName;
        $this->schoolName = $schoolName;
    }

    public function getPencilType()
    {
        return "The pencil is " . $this->pencilColor->getPencilColor() . " and the size is " . $this->pencilSize->getPencilSize();
    }
}
