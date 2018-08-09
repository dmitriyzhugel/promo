<?php

namespace app\modules\adm\widgets;

use Yii;
use yii\base\Widget;

/**
 * Right side bar
 * @author Dmitriy Zhugel <dzhugel@mail.ru>
 */
class RightSidebarWidget extends Widget {
    
    public function init() {
	parent::init();
    }
    
    public function run() {
	return $this->render('right_sidebar');
    }
    
}