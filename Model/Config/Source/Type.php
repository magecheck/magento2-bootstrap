<?php
/**
 * Copyright © 2017 MageCheck - All rights reserved.
 * See LICENSE.md bundled with this module for license details.
 */
namespace MageCheck\Bootstrap\Model\Config\Source;

class Type implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 0, 'label' => __('Disabled')),
            array('value' => 1, 'label' => __('Enabled'))
        );
    }
}