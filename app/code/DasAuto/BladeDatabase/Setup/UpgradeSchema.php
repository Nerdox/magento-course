<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 28. 10. 2021
 * Time: 10:29
 */

namespace DasAuto\BladeDatabase\Setup;

use Magento\Framework\Db\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{

    /**
     * Upgrades DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $lastVersion = "0.0.14";

        if (version_compare($context->getVersion(), $lastVersion, ">=")) {
            return;
        }

        $setup->startSetup();

        if (version_compare($context->getVersion(), "0.0.12", "<")) {
            $setup->getConnection()->addColumn(
                $setup->getTable("affiliate_member"),
                "phone_number",
                [
                    'nullable' => false,
                    'type' => Table::TYPE_TEXT,
                    'comment' => "Member phone number"
                ]
            );
        }

        if (version_compare($context->getVersion(), "0.0.14", "<")) {
            $setup->getConnection()->changeColumn(
                $setup->getTable("affiliate_member"),
                "entity_id",
                "entity_id",
                [
                    'type' => Table::TYPE_INTEGER,
                    'auto_increment' => true,
                    'unsigned' => true,
                    'nullable' => false,
                    'primary' => true,
                    'comment' => "Member ID"
                ]
            );
        }

        $setup->endSetup();
    }
}
