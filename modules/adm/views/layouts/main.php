<?php
    use app\modules\adm\assets\AdmAsset;
    use app\modules\adm\widgets\MainMenuWidget;
    use app\modules\adm\widgets\TopBarWidget;
    use app\modules\adm\widgets\RightSidebarWidget;
    AdmAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ZAIMOVIK | Admin</title>

    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <!--<link href="font-awesome/css/font-awesome.css" rel="stylesheet">-->
    <!-- Morris -->
    <!--<link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">-->
    <!--<link href="css/animate.css" rel="stylesheet">-->
    <!--<link href="css/style.css" rel="stylesheet">-->
    
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <div id="wrapper">
    <?= MainMenuWidget::widget();?>

        <div id="page-wrapper" class="gray-bg">
        <?= TopBarWidget::widget();?>

        <div class="wrapper wrapper-content">
	<?=$content;?>
        </div>

        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> ZAIMOVIK.INFO &copy; <?=date('Y');?>
            </div>
        </div>

        </div>
        <?= RightSidebarWidget::widget();?>
	
    </div>
    
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>