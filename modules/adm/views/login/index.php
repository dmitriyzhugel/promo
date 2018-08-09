<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to ZAIMOVIK</h3>
            <!--<p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.</p>-->
            <p>Login in. To see it in action.</p>
			<?php $form = ActiveForm::begin([
				'id' => 'login-form',
				'options' => [
					'class' => 'm-t'
				],
				'fieldConfig' => [
					'template' => '<div class="form-group">{input}{error}</div>'
				]
			]); ?>
			<?= $form->field($model, 'username')->textInput(['type'=>'email','autofocus' => true,'placeholder'=>'Username']) ?>
			<?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password']) ?>
			<?= Html::submitButton('Login', ['class' => 'btn btn-primary block full-width m-b', 'name' => 'login-button']) ?>
			<?php ActiveForm::end(); ?>
			
            <!--<form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>-->
            <p class="m-t"> <small>ZAIMOVIK &copy; <?=date('Y');?></small> </p>
        </div>
    </div>