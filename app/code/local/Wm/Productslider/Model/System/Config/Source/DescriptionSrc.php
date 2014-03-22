<?php
class Wm_Productslider_Model_System_Config_Source_DescriptionSrc
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'description',	    'label'=>Mage::helper('productslider')->__('Description')),
        	array('value'=>'short_description',	'label'=>Mage::helper('productslider')->__('Short Description'))
		);
	}
}
