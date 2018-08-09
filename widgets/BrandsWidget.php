<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;

/**
 * Виджет brands
 * @author Dmitriy Zhugel <dzhugel@mail.ru>
 */
class BrandsWidget extends Widget {
    
    public function init() {
    	parent::init();
    }
    
    public function run() {
    	return $this->render('_brands');
    }
    
}