<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;

/**
 * Виджет footer сайта
 * @author Dmitriy Zhugel <dzhugel@mail.ru>
 */
class FooterWidget extends Widget {
	
	public function init() {
		parent::init();
	}
	
	public function run() {
		return $this->render('_footer');
	}
	
}