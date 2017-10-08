<?php
/*------------------------------------------------------------------------
# SM ShoppyStore - Version 1.0.0
# Copyright (c) 2016 YouTech Company. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: YouTech Company
# Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

namespace Sm\ShoppyStore\Model\Config\Source;

class Color implements \Magento\Framework\Option\ArrayInterface
{
	public function toOptionArray()
	{
		return [
			['value' => 'red', 'label' => __('Red')],
			['value' => 'bue', 'label' => __('Blue')],
			['value' => 'green', 'label' => __('Green')],
			['value' => 'pink', 'label' => __('Pink')],	
			['value' => 'orange', 'label' => __('Orange')],
			['value' => 'mazarine', 'label' => __('Mazarine')],
			['value' => 'brown', 'label' => __('Brown')],
			['value' => 'yellow', 'label' => __('Yellow')]
		];
	}
}