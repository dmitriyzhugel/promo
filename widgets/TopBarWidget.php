<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;

/**
 * Виджет верхней панели
 * @author Dmitriy Zhugel <dzhugel@mail.ru>
 */
class TopBarWidget extends Widget {
	
	public function init() {
		parent::init();
	}
	
	public function run() {
		return $this->render('_topbar');
	}
	
}