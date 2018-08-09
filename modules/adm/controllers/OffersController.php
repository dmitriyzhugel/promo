<?php

namespace app\modules\adm\controllers;

use Yii;
use app\modules\adm\components\ControllerAdm;

/**
 * Управление офферами
 * @author Zhugel Dmitriy <dzhugel@mail.ru>
 */
class OffersController extends ControllerAdm {
    
    public function init(){
	parent::init();
	Yii::$app->params['asset_css'] = [
	    'css/bootstrap.min.css',
	    'font-awesome/css/font-awesome.css',
	    'css/plugins/dataTables/dataTables.bootstrap.css',
	    'css/plugins/dataTables/dataTables.responsive.css',
	    'css/plugins/dataTables/dataTables.tableTools.min.css',	    
	    'css/animate.css',
	    'css/style.css'
	];
	Yii::$app->params['asset_js'] = [
	    'js/jquery-2.1.1.js',
	    'js/bootstrap.min.js',
	    'js/plugins/metisMenu/jquery.metisMenu.js',
	    'js/plugins/slimscroll/jquery.slimscroll.min.js',
	    'js/plugins/jeditable/jquery.jeditable.js',
	    'js/plugins/dataTables/jquery.dataTables.js',
	    'js/plugins/dataTables/dataTables.bootstrap.js',
	    'js/plugins/dataTables/dataTables.responsive.js',
	    'js/plugins/dataTables/dataTables.tableTools.min.js',
	    'js/inspinia.js',
	    'js/plugins/pace/pace.min.js'
	];
	Yii::$app->params['controller_js'] = 'js/controllers/offers.js';
    }
    
    public function actionIndex(){
	return $this->render('index');
    }
    
}