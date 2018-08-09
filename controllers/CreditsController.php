<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\components\Mobile_Detect;

/**
 * Кредиты
 * @author Zhugel Dmitriy
 */
class CreditsController extends Controller {
	
	public $enableCsrfValidation = false;
	
	public function init() {
            parent::init();
            $this->layout = 'biznex';
        }
	
	public function actionIndex(){
            Yii::$app->view->params['body_class'] = 'blog-classic boxed-menu';
            Yii::$app->view->params['main_category_alias'] = 'services';
            $detect = new Mobile_Detect();
            $is_mobile = $detect->isMobile();
            return $this->render('index',['is_mobile'=>$is_mobile]);
	}
	
}