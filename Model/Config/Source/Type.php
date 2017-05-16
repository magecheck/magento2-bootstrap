<?php
/**
 * Copyright © 2017 MageCheck - All rights reserved.
 * See LICENSE.md bundled with this module for license details.
 */
namespace MageCheck\Bootstrap\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Type implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __('Disabled')],
            ['value' => 1, 'label' => __('Enabled')]
        ];
    }
}
