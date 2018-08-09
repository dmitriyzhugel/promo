<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use Yii;
use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BiznexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'plugins/bootstrap/css/bootstrap.min.css',
		'plugins/font-awesome/css/font-awesome.min.css',
		'plugins/selectbox/select_option1.css',
		'plugins/prismjs/prism.css',
		'plugins/fancybox/jquery.fancybox.min.css',
		'plugins/fancybox/fancyMorph.css',
		'plugins/selectbox/select_option1.css',
		'plugins/thin-line-icons/css/thin-line-icons.css',
		'plugins/isotope/isotope.min.css',
		'plugins/animate.css',
		'css/style.css',
		'css/default.css'
    ];
    public $js = [
		'https://maps.googleapis.com/maps/api/js?key=AIzaSyCsQdSlW4vj5RvXp2_pLnv1s1ErfxjM5_o',
		'plugins/jquery/jquery.min.js',
		'plugins/jquery/jquery-migrate-3.0.0.min.js',
		'plugins/bootstrap/js/tether.min.js',	
		'plugins/bootstrap/js/bootstrap.min.js',
		'plugins/selectbox/jquery.selectbox-0.1.3.min.js',
		'plugins/slick/slick.min.js',
		'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js',
		'plugins/circle-progress/jquery.appear.js',
		'plugins/isotope/isotope.min.js',
		'plugins/lazyload/lazyload.min.js',
		'plugins/fancybox/jquery.fancybox.min.js',
		'plugins/fancybox/fancyMorph.js',
		'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js',
		'plugins/counterUp/jquery.counterup.js',
		'plugins/smoothscroll/SmoothScroll.js',
		'plugins/syotimer/jquery.syotimer.min.js',
		'js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        /*'yii\bootstrap\BootstrapAsset',*/
    ];
	public function init(){
		parent::init();
		if(isset(Yii::$app->params['controller_js'])){
			$this->js[] = Yii::$app->params['controller_js'];
		}
	}
}
