<?php

namespace app\modules\adm\assets;

use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
	public $sourcePath = '@app/modules/adm/assets';
	public $css = [
		'css/bootstrap.min.css',
		'font-awesome/css/font-awesome.css',
		'css/animate.css',
		'css/style.css'
	];
	public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}