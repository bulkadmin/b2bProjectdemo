<?php

/*------------------------------------------------------------------------
# SM ShoppyStore - Version 1.0.0
# Copyright (c) 2016 YouTech Company. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: YouTech Company
# Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

namespace Sm\ShoppyStore\Model\Config\Source;

class ListHeaderStyles implements \Magento\Framework\Option\ArrayInterface
{
	public function toOptionArray()
	{
		return [
			['value' => 'hd-1', 'label' => __('Header 1')],
			['value' => 'hd-2', 'label' => __('Header 2')],
			['value' => 'hd-3', 'label' => __('Header 3')],
			['value' => 'hd-4', 'label' => __('Header 4')],
			['value' => 'hd-5', 'label' => __('Header 5')],
			['value' => 'hd-6', 'label' => __('Header 6')],
			['value' => 'hd-7', 'label' => __('Header 7')]
		];
	}
}