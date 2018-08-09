<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;

/**
 * Виджет метрики
 * @author Dmitriy Zhugel <dzhugel@mail.ru>
 */
class MetrikaWidget extends Widget {
    
    public function init() {
    	parent::init();
    }
    
    public function run() {
        if($_SERVER['REMOTE_ADDR']!='127.0.0.1'){
            return $this->render('_metrika');
        }
    }
    
}