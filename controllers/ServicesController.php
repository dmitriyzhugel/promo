<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

/**
 * Сервисы
 */
class ServicesController extends Controller {
    
    public function init() {
	parent::init();
	$this->layout = 'biznex';
    }
    
    public function actionIndex(){
	return $this->renderPartial('index');
    }
    
    /**
     * Кредитный калькулятор
     */
    public function actionCredit(){
	return $this->renderPartial('credit');
    }
    
    /**
     * Ипотечный калькулятор
     */
    public function actionIpoteka(){
	return $this->renderPartial('ipoteka');
    }
}