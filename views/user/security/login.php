<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */
use dektrium\user\widgets\Connect;
use dektrium\user\models\LoginForm;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module $module
 */


$this->title = Yii::t('user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="top-box-mask"></div>
<div class="container">

</div>
</header><!-- /.header-->
<section class="section section-color-secondary">
    <div class="container">
        <div class="section-title">
            <h2 class="section-title text-center"><span>Авторизация</span></h2>
        </div>

        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <div class="widget  widget-box box-container widget-form form-main" id="form">
                    <div class="widget-header">
                        <h2>Введите ваш логин и пароль</h2>
                    </div>
                    <?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>

                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'enableAjaxValidation' => true,
                        'enableClientValidation' => false,
                        'validateOnBlur' => false,
                        'validateOnType' => false,
                        'validateOnChange' => false,
                        'class' => 'form-additional',
                        'fieldConfig' => [
                            'template' => "<div class=\"control-group\"> {label} <div class=\"controls\"> {input} {error}</div></div>\n",
                            'labelOptions'=>['class' => 'control-label'],
                        ],
                    ]) ?>

                    <?php if ($module->debug): ?>
                        <?= $form->field($model, 'login', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control', 'tabindex' => '1']])->dropDownList(LoginForm::loginList()); ?>
                    <?php else: ?>
                        <?= $form->field($model, 'login', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control', 'tabindex' => '1']]); ?>
                    <?php endif ?>

                    <?php if ($module->debug): ?>
                        <div class="alert alert-warning">
                            <?= Yii::t('user', 'Password is not necessary because the module is in DEBUG mode.'); ?>
                        </div>
                    <?php else: ?>
                        <?= $form->field($model, 'password', ['inputOptions' => ['class' => 'form-control', 'tabindex' => '2']])->passwordInput()->label(Yii::t('user', 'Password')) ?>
                    <?php endif ?>

                    <?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '3']) ?>

                    <?= Html::submitButton(Yii::t('user', 'Sign in'), ['class' => 'btn btn-success btn-block', 'tabindex' => '4']) ?>

                    <?php ActiveForm::end(); ?>

                    <?php if ($module->enableConfirmation): ?>
                        <p class="text-center">
                            <br><?= Html::a(Yii::t('user', 'Didn\'t receive confirmation message?'), ['/user/registration/resend']) ?>
                        </p>
                    <?php endif ?>
                    <?php if ($module->enableRegistration): ?>
                        <p class="text-center">
                            <br><?= Html::a(Yii::t('user', 'Don\'t have an account? Sign up!'), ['/user/registration/register']) ?>
                        </p>
                    <?php endif ?>
                    <?= Connect::widget([
                        'baseAuthUrl' => ['/user/security/auth'],
                    ]) ?>

                </div><!-- /.widget-form-->


            </div>

            <div class="col-lg-3">
            </div>
        </div>

    </div>
</section>