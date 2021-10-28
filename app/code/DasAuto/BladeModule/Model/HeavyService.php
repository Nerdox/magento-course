<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 27. 10. 2021
 * Time: 11:47
 */

namespace DasAuto\BladeModule\Model;

class HeavyService
{
    public function __construct()
    {
        echo "Heavy service has been initiated<br/>";
    }

    public function printHeavyServiceMessage()
    {
        echo "Message from heavyservice";
    }
}
