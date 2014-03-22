<?php

class Wm_Productslider_Model_System_Config_Source_OrderDirection
{
	public function toOptionArray()
	{
		return array(
			array('value' => 'asc',		'label' => Mage::helper('productslider')->__('Asc')),
			array('value' => 'desc', 	'label' => Mage::helper('productslider')->__('Desc'))
		);
	}
}
