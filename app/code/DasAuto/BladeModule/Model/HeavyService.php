<?php

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
