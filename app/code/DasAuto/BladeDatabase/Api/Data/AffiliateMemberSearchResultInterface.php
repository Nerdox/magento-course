<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 29. 10. 2021
 * Time: 10:17
 */

namespace DasAuto\BladeDatabase\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface AffiliateMemberSearchResultInterface extends SearchResultsInterface
{
    /**
     * @return \Magento\Framework\Api\ExtensibleDataInterface[]
     */
    public function getItems();

    /**
     * @param array $items
     * @return SearchResultsInterface
     */
    public function setItems(array $items);
}