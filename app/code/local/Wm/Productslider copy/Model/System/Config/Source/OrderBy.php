<?php

class Wm_Productslider_Model_System_Config_Source_OrderBy
{
	public function toOptionArray()
	{
		return array(
			array('value' => 'position',	    'label' => Mage::helper('productslider')->__('Position')),
			array('value' => 'created_at', 	    'label' => Mage::helper('productslider')->__('Date Created')),
			array('value' => 'name', 		    'label' => Mage::helper('productslider')->__('Name')),
			array('value' => 'price', 		    'label' => Mage::helper('productslider')->__('Price')),
			array('value' => 'random', 		    'label' => Mage::helper('productslider')->__('Random')),
			array('value' => 'top_rating', 	    'label' => Mage::helper('productslider')->__('Top Rated')),
			array('value' => 'most_reviewed',   'label' => Mage::helper('productslider')->__('Most Reviewed')),
			array('value' => 'most_viewed',	    'label' => Mage::helper('productslider')->__('Most Viewed')),
			array('value' => 'best_sales',	    'label' => Mage::helper('productslider')->__('Best Seller')),
		);
	}
}
