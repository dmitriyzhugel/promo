<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

/**
 * Вспомогательный контроллер
 */
class UtilsController extends Controller {
    
    public function actionIndex(){
	echo 'auth_key = ' . Yii::$app->security->generateRandomString();
	echo '<br>';
	$password = 'clubmusic';
	$hash = Yii::$app->getSecurity()->generatePasswordHash($password);
	echo 'hash = ' . $hash;
	echo '<br>';
    }

    public function actionHash(){
	$password = Yii::$app->request->get('password');
	$hash = Yii::$app->getSecurity()->generatePasswordHash($password);
	echo 'hash = ' . $hash;
	echo '<br>';
    }
    
}