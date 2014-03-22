<?php
class Wm_Productslider_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getJQquery()
    {
		if (Mage::getStoreConfigFlag('productslider_cfg/advanced/include_jquery'))
        {
			if (null == Mage::registry('wm.jquery'))
            {
				Mage::register('wm.jquery', 1);
				return 'js/foundation/jquery-1.8.1.min.js';
			}
		}
		return;
	}
	public function getJQqueryNoconflict()
    {
		if (Mage::getStoreConfigFlag('productslider_cfg/advanced/include_jquery'))
        {
			if (null == Mage::registry('wm.jquerynoconflict'))
            {
				Mage::register('wm.jquerynoconflict', 1);
				return 'wm/productslider/js/noconflict.js';
			}
		}
		return;
	}
	public function getJSCaroufredsel()
    {
		if (null == Mage::registry('wm.caroufredsel'))
        {
			Mage::register('wm.caroufredsel', 1);
			return 'wm/productslider/js/jquery.carouFredSel-6.2.1-packed.js';
		}
		return;
	}
	public function getJSMousewheel()
    {
		if (null == Mage::registry('wm.mousewheel'))
        {
			Mage::register('wm.mousewheel', 1);
			return 'wm/productslider/js/jquery.mousewheel.min.js';
		}
		return;
	}
	public function getJSTouchswipe()
    {
		if (null == Mage::registry('wm.touchswipe'))
        {
			Mage::register('wm.touchswipe', 1);
			return 'wm/productslider/js/jquery.touchSwipe.min.js';
		}
		return;
	}
	public function getJSTransit(){
		if (null == Mage::registry('wm.transit'))
        {
			Mage::register('wm.transit', 1);
			return 'wm/productslider/js/jquery.transit.min.js';
		}
		return;
	}
}
?>