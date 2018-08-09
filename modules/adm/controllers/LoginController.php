<?php

namespace app\modules\adm\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;

class LoginController extends Controller {
	
	public function actionIndex(){	
	    if (!Yii::$app->user->isGuest) {
		return $this->goHome();
	    }

	    $model = new LoginForm();
	    if ($model->load(Yii::$app->request->post()) && $model->login()) {		
		//return $this->goBack();
		return $this->redirect('/adm/');
	    }
		
	    $this->layout = 'login';
	    return $this->render('index', [
		'model' => $model,
	    ]);
	}
	
}