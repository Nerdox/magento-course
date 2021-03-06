<?php

namespace DasAuto\BladeDatabase\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    /**
     * Installs data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->getConnection();

        $setup->getConnection()->insert(
            $setup->getTable("affiliate_member"),
            [
                'name' => "Bob",
                'address' => "Zeleznicna 10, Bratislava",
                'status' => true
            ]
        );

        $setup->endSetup();
    }
}