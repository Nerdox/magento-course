<?php

namespace DasAuto\BladeAttribute\Setup;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    private $eavSetupFactory;

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * Installs data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Zend_Validate_Exception
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $eavSetup = $this->eavSetupFactory->create([
            'setup' => $setup
        ]);
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            "custom_eav",
            [
                'group' => "Content",
                'type' => "text",
                'backend' => \DasAuto\BladeAttribute\Model\Config\BladeValidation::class,
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visibility' => true,
                'required' => true,
                'searchable' => false,
                'use_in_product_listing' => true,
                'label' => 'Custom EAV',
                'input' => 'text'
            ]
        );

        $eavSetup = $this->eavSetupFactory->create([
            'setup' => $setup
        ]);
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            "member_type",
            [
                'group' => "Content",
                'type' => "text",
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visibility' => true,
                'required' => false,
                'searchable' => false,
                'use_in_product_listing' => true,
                'label' => 'Custom Member Type',
                'input' => 'select',
                'source' => \DasAuto\BladeAttribute\Model\Config\BladeOptions::class
            ]
        );

        $setup->endSetup();
    }
}