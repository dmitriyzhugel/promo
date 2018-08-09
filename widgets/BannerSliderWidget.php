<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;

/**
 * Виджет BANNER SLIDER CAROUSEL
 * @author Dmitriy Zhugel <dzhugel@mail.ru>
 */
class BannerSliderWidget extends Widget {
    
    public function init() {
	parent::init();
    }
    
    public function run() {
	return $this->render('_banner_slider');
    }
    
}