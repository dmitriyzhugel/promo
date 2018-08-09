<?php

namespace app\modules\adm\components;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

/*
 * Базовый класс для контроллеров модуля Adm
 * @author Dmitriy Zhugel
 */

class ControllerAdm extends Controller {
    
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    
    public function init() {
	parent::init();
	Yii::$app->user->loginUrl = ['adm/login'];
	$this->layout = 'main';
    }
    
    public function beforeAction($action) {
	$result = parent::beforeAction($action);
	return $result;
    }
    
}