<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 27. 10. 2021
 * Time: 10:45
 */

namespace DasAuto\BladeModule\Plugin;

class PluginSolution3
{
    public function beforeExecute(\DasAuto\BladeModule\Controller\Page\CBlade $subject)
    {
        echo "before execute sort order 30<br/>";
    }

    public function afterExecute(\DasAuto\BladeModule\Controller\Page\CBlade $subject)
    {
        echo "after execute sort order 30<br/>";
    }

    public function aroundExecute(\DasAuto\BladeModule\Controller\Page\CBlade $subject, callable $proceed)
    {
        echo "before proceed sort order 30<br/>";
        $proceed();
        echo "after proceed sort order 30<br/>";
    }
}
