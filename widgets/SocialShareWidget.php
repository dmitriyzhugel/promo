<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;

/**
 * Виджет социальных сетей - share
 * @author Dmitriy Zhugel <dzhugel@mail.ru>
 */
class SocialShareWidget extends Widget {
	
	public function init() {
		parent::init();
	}
	
	public function run() {
		return $this->render('_social_share');
	}
	
}