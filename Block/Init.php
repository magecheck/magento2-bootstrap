<?php
/**
 * Copyright © 2017 MageCheck - All rights reserved.
 * See LICENSE.md bundled with this module for license details.
 */
namespace MageCheck\Bootstrap\Block;

class Init extends \Magento\Backend\Block\AbstractBlock
{

    /**
     * @override
     * @see \Magento\Backend\Block\AbstractBlock::_construct()
     * @return void
     */
    protected function _construct()
    {
        /** @var \Magento\Framework\App\ObjectManager $om */
        $om = \Magento\Framework\App\ObjectManager::getInstance();
        /** @var \Magento\Framework\View\Page\Config $page */
        $page = $om->get('Magento\Framework\View\Page\Config');
        $page->addPageAsset('MageCheck_Bootstrap::bootstrap-3.3.7/css/bootstrap.min.css');
    }

}
