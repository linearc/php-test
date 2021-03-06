<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Administrator Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">




    <!--<div class="row">
        <div class="col-lg-5">
            <?php /*$form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); */ ?>
        </div>
    </div>-->
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="logo margin-top-30">
                <?= Html::encode($this->title) ?>
            </div>
            <!-- start: LOGIN BOX -->
            <div class="box-login">
                <!--<form class="form-login" action="index.html">-->
                <?php $form = ActiveForm::begin(['id' => 'login-form','options' => ['class' => 'form-login']]); ?>
                    <fieldset>
                        <legend>
                            Sign in to your account
                        </legend>
                        <p>
                            Please enter your name and password to log in.
                        </p>
                        <div class="form-group">
								<span class="input-icon">
									<!--<input type="text" class="form-control" name="username" placeholder="Username">-->
                                    <?= Html::activeTextInput($model, 'username', ['placeholder' => 'Username','template' => "\n{input}\n{hint}\n{error}", 'class' => 'form-control']); ?>

									<i class="fa fa-user"></i> </span>
                        </div>
                        <div class="form-group form-actions">
								<span class="input-icon">
									<!--<input type="password" class="form-control password" name="password" placeholder="Password">-->

                                    <?= Html::activeTextInput($model, 'password', ['placeholder' => 'Password','template' => "\n{input}\n{hint}\n{error}", 'class' => 'form-control']); ?>
									<i class="fa fa-lock"></i>
									<a class="forgot" href="login_forgot.html">
                                        I forgot my password
                                    </a> </span>
                        </div>
                        <div class="form-actions">
                            <div class="checkbox clip-check check-primary">
                                <input type="checkbox" id="remember" value="1">
                                <label for="remember">
                                    Keep me signed in
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">
                                Login <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                        <div class="new-account">
                            Don't have an account yet?
                            <a href="login_registration.html">
                                Create an account
                            </a>
                        </div>
                    </fieldset>
                </form>


            </div>
            <!-- end: LOGIN BOX -->
        </div>
    </div>

</div>
