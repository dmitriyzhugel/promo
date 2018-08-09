<?php

namespace app\modules\adm\controllers;

use Yii;
use app\modules\adm\components\ControllerAdm;

class DashboardController extends ControllerAdm {
    
    public function init(){
	parent::init();
	Yii::$app->params['asset_css'] = [
	    'css/bootstrap.min.css',
	    'font-awesome/css/font-awesome.css',
	    'css/plugins/toastr/toastr.min.css',
	    'js/plugins/gritter/jquery.gritter.css',
	    'css/animate.css',
	    'css/style.css'
	];
	Yii::$app->params['asset_js'] = [
	    'js/jquery-2.1.1.js',
	    'js/bootstrap.min.js',
	    'js/plugins/metisMenu/jquery.metisMenu.js',
	    'js/plugins/slimscroll/jquery.slimscroll.min.js',
	    'js/plugins/flot/jquery.flot.js',
	    'js/plugins/flot/jquery.flot.tooltip.min.js',
	    'js/plugins/flot/jquery.flot.spline.js',
	    'js/plugins/flot/jquery.flot.resize.js',
	    'js/plugins/flot/jquery.flot.pie.js',
	    'js/plugins/flot/jquery.flot.symbol.js',
	    'js/plugins/flot/curvedLines.js',
	    'js/plugins/peity/jquery.peity.min.js',
	    'js/demo/peity-demo.js',
	    'js/inspinia.js',
	    'js/plugins/pace/pace.min.js',
	    'js/plugins/jquery-ui/jquery-ui.min.js',
	    'js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
	    'js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
	    'js/plugins/sparkline/jquery.sparkline.min.js',
	    'js/demo/sparkline-demo.js',
	    'js/plugins/chartJs/Chart.min.js',
	    'js/scripts.js'
	];
    }
    
    public function actionIndex(){	
	return $this->render('index');	
    }
    
}