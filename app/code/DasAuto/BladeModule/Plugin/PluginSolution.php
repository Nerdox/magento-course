<?php

namespace DasAuto\BladeModule\Plugin;

class PluginSolution
{
    public function beforeExecute(\DasAuto\BladeModule\Controller\Page\CBlade $subject)
    {
        echo "before execute sort order 10<br/>";
    }

    public function afterExecute(\DasAuto\BladeModule\Controller\Page\CBlade $subject)
    {
        echo "after execute sort order 10<br/>";
    }

    public function aroundExecute(\DasAuto\BladeModule\Controller\Page\CBlade $subject, callable $proceed)
    {
        echo "before proceed sort order 10<br/>";
        $proceed();
        echo "after proceed sort order 10<br/>";
    }
    /*
    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
    {
        return "Before plugin " . $name;
    }

    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result . " after plugin";
    }


    public function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed)
    {
        echo "before proceed";
        $name = $proceed();
        echo $name;
        echo "after proceed";
        return $name;
    }

    public function aroundGetIdBySku(\Magento\Catalog\Model\Product $subject, callable $proceed, $sku)
    {
        echo "before proceed <br>";
        $id = $proceed($sku);
        echo $id . "<br>";
        echo "after proceed";
        return $id;
    }
    */
}
