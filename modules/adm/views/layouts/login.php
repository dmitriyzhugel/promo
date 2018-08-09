<?php
    use app\modules\adm\assets\LoginAsset;
    LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZAIMOVIK | Login</title>
	<?php $this->head() ?>

</head>

<body class="gray-bg">
<?php $this->beginBody() ?>
<?=$content;?>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>