<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\BiznexAsset;
use app\widgets\HeaderWidget;
use app\widgets\TopBarWidget;
use app\widgets\MetrikaWidget;

BiznexAsset::register($this);
$this->registerCssFile('/plugins/slick/slick.css', ['media'=>'screen']);
$this->registerCssFile('/plugins/slick/slick-theme.css', ['media'=>'screen']);
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js',
	[
	    'integrity'=>'sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4',
	    'crossorigin'=>'anonymous'
	]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
	<!-- FAVICON -->
	<link href="/img/favicon.png" rel="shortcut icon">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    </head>
    <body id="body" class="<?= Yii::$app->view->params['body_class']; ?>">    
	<?php $this->beginBody() ?>
	<div class="mobile-sticky-header-overlay"></div>
	<?= TopBarWidget::widget(); ?>
	<?= HeaderWidget::widget(); ?>
	<?= $content; ?>
	<?php $this->endBody() ?>
	<?= MetrikaWidget::widget(); ?>
    </body>
</html>
<?php $this->endPage() ?>
