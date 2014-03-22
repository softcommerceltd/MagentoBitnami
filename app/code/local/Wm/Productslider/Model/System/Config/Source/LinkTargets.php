<?php

class Wm_Productslider_Model_System_Config_Source_LinkTargets
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'_self',	'label'=>Mage::helper('productslider')->__('Same Window')),
        	array('value'=>'_blank','label'=>Mage::helper('productslider')->__('New Window')),
			array('value'=>'_popup','label'=>Mage::helper('productslider')->__('Popup Window'))
		);
	}
}
