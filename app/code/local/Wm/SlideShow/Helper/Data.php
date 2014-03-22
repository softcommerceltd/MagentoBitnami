<?php

class Wm_SlideShow_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function __construct()
    {
        $this->defaults = array(
            'title' 		    => 'SlideShow',
            'autoslide'		    => '1',
            'timeout'		    => '8000',
            'controls'		    => '1',
            'pager'			    => '0',
            'fullWidth'		    => '1',
            'sliderheight'	    => '500',
            'sliderwidth'  	    => '1170',
            'slide_itmes'	    =>'',
            'include_jquery'	=> '1',
            'pretext'			=> '',
            'posttext'			=> ''
        );
    }

    function get($attributes=array())
    {
        $data               = $this->defaults;
        $general            = Mage::getStoreConfig("slideshow_cfg/general");
        $banner_selection 	= Mage::getStoreConfig("slideshow_cfg/banner_selection");

        if (!is_array($attributes))
        {
            $attributes = array($attributes);
        }

        if (is_array($general))				$data = array_merge($data, $general);
        if (is_array($banner_selection)) 	$data = array_merge($data, $banner_selection);

        return array_merge($data, $attributes);;
    }

    public function getJQquery()
    {
        if (Mage::getStoreConfigFlag('slideshow_cfg/general/include_jquery'))
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
        if (Mage::getStoreConfigFlag('slideshow_cfg/general/include_jquery'))
        {
            if (null == Mage::registry('wm.jquerynoconflict'))
            {
                Mage::register('wm.jquerynoconflict', 1);
                return 'wm/slideshow/js/noconflict.js';
            }
        }
        return;
    }

    public function getJSFractionSlider()
    {
        if (null == Mage::registry('wm.slideshow'))
        {
            Mage::register('wm.slideshow', 1);
            return 'wm/slideshow/js/slideshow.js';
        }
        return;
    }
}
?>