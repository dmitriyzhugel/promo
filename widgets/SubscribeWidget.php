<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;

/**
 * Виджет подписки на новости
 * @author Dmitriy Zhugel <dzhugel@mail.ru>
 */
class SubscribeWidget extends Widget {
    
    public function init() {
    	parent::init();
    }
    
    public function run() {
    	return $this->render('_subscribe');
    }
    
}