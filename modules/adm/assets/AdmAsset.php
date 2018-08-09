<?php

namespace app\modules\adm\assets;

use yii\web\AssetBundle;
use Yii;

class AdmAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/adm/assets';
    public $css = [];
    public $js = [];
    
    public function init()
    {
	parent::init();
	$this->css = Yii::$app->params['asset_css'];
	$this->js = Yii::$app->params['asset_js'];
	if(isset(Yii::$app->params['controller_js'])){
	    $this->js[] = Yii::$app->params['controller_js'];
	}
    }
    
}