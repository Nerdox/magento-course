<?php

namespace DasAuto\BladeDatabase\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{

    /**
     * Upgrades data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), "0.0.13", ">")) {
            return;
        }

        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable("affiliate_member"),
            [
                'name' => "Karol",
                'address' => "Bajkalska 99, Bratislava",
                'status' => true,
                'phone_number' => "0944666733"
            ]
        );

        $setup->endSetup();
    }
}
