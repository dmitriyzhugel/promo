<?php

namespace app\modules\adm\controllers;

use Yii;
use app\modules\adm\components\ControllerAdm;

class LogoutController extends ControllerAdm {
    
	/**
     * Logout action.
     *
     * @return Response
     */
    public function actionIndex(){	
		Yii::$app->user->logout();
        return $this->goHome();
    }
}