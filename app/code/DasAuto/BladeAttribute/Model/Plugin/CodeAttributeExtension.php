<?php

namespace DasAuto\BladeAttribute\Model\Plugin;

use DasAuto\BladeDatabase\Api\Data\AffiliateMemberExtensionFactory;
use DasAuto\BladeDatabase\Model\AffiliateMemberRepository;

class CodeAttributeExtension
{
    private $extensionFactory;

    public function __construct(AffiliateMemberExtensionFactory $extensionFactory)
    {
        $this->extensionFactory = $extensionFactory;
    }

    public function aroundGetAffiliateMemberById(
        AffiliateMemberRepository $affiliateMemberRepository,
        \Closure $proceed,
        $memberId
    ) {
        $model = $proceed($memberId);
        $extensionAttributes = $model->getExtensionAttributes();

        if ($extensionAttributes == null) {
            $extensionAttributes = $this->extensionFactory->create();
        }

        $extensionAttributes->setCode("Code #" . $memberId);
        $model->setExtensionAttributes($extensionAttributes);
        return $model;
    }
}
