<?php

/*------------------------------------------------------------------------
# SM ShoppyStore - Version 1.0.0
# Copyright (c) 2016 YouTech Company. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: YouTech Company
# Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

namespace Sm\ShoppyStore\Model\Config\Source;

class ListFooterStyles implements \Magento\Framework\Option\ArrayInterface
{
	public function toOptionArray()
	{
		return [
			['value' => 'ft-1', 'label' => __('Footer Style 1')],
			['value' => 'ft-2', 'label' => __('Footer Style 2')],
			['value' => 'ft-3', 'label' => __('Footer Style 3')],
			['value' => 'ft-4', 'label' => __('Footer Style 4')],
			['value' => 'ft-5', 'label' => __('Footer Style 5')]
		];
	}
}