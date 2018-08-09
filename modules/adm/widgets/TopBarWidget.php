<?php

namespace app\modules\adm\widgets;

use Yii;
use yii\base\Widget;

/**
 * Виджет топ панели
 * @author Dmitriy Zhugel <dzhugel@mail.ru>
 */
class TopBarWidget extends Widget {
    
    public function init() {
	parent::init();
    }
    
    public function run() {
	return $this->render('topbar');
    }
    
}