<?php
/*------------------------------------------------------------------------
# SM ShoppyStore - Version 1.0.0
# Copyright (c) 2016 YouTech Company. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: YouTech Company
# Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

namespace Sm\ShoppyStore\Model\Config\Source;

class ListMenuStyles implements \Magento\Framework\Option\ArrayInterface
{
	public function toOptionArray()
	{
		return [
			['value' => 'megamenu', 'label' => __('Mega Menu')],
			['value' => 'css', 'label' => __('Css')],
		];
	}
}