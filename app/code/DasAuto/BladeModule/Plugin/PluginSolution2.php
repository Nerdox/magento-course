<?php

namespace DasAuto\BladeModule\Plugin;

class PluginSolution2
{
    public function beforeExecute(\DasAuto\BladeModule\Controller\Page\CBlade $subject)
    {
        echo "before execute sort order 20<br/>";
    }

    public function afterExecute(\DasAuto\BladeModule\Controller\Page\CBlade $subject)
    {
        echo "after execute sort order 20<br/>";
    }

    public function aroundExecute(\DasAuto\BladeModule\Controller\Page\CBlade $subject, callable $proceed)
    {
        echo "before proceed sort order 20<br/>";
        $proceed();
        echo "after proceed sort order 20<br/>";
    }
}
