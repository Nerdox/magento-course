<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 26. 10. 2021
 * Time: 16:22
 */

namespace DasAuto\BladeModule\PInterface;

class BigPencil implements PencilInterface
{
    public function getPencilType()
    {
        return "Big Pencil";
    }
}