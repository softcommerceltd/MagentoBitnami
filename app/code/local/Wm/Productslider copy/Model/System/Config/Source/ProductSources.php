<?php

class Wm_Productslider_Model_System_Config_Source_ProductSources
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'catalog',	'label'=>Mage::helper('productslider')->__('Catalog')),
        	array('value'=>'product',	'label'=>Mage::helper('productslider')->__('Product'))
		);
	}
}
