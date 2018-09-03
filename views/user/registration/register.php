<?php
/**
 * Created by PhpStorm.
 * User: alexanderzhilyaev
 * Date: 03.09.18
 * Time: 21:52
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\User $model
 * @var dektrium\user\Module $module
 */

$this->title = Yii::t('user', 'Sign up');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="top-box-mask"></div>
<div class="container">

</div>
</header><!-- /.header-->
<section class="section section-color-secondary">
    <div class="container">
        <div class="section-title">
            <h2 class="section-title text-center"><span>Регистрация</span></h2>
        </div>

        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <div class="widget  widget-box box-container widget-form form-main" id="form">

                    <?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>

                    <?php $form = ActiveForm::begin([
                        'id' => 'registration-form',
                        'enableAjaxValidation' => true,
                        'enableClientValidation' => false,
                        'class' => 'form-additional',
                        'fieldConfig' => [
                            'template' => "<div class=\"control-group\"> {label} <div class=\"controls\"> {input} {error}</div></div>\n",
                            'labelOptions'=>['class' => 'control-label'],
                        ],
                    ]); ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'username') ?>

                    <?php if ($module->enableGeneratingPassword == false): ?>
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    <?php endif ?>

                    <?= Html::submitButton(Yii::t('user', 'Sign up'), ['class' => 'btn btn-success btn-block']) ?>

                    <?php ActiveForm::end(); ?>

                    <p class="text-center">
                        <br><?= Html::a(Yii::t('user', 'Already registered? Sign in!'), ['/user/security/login']) ?>
                    </p>

                </div><!-- /.widget-form-->


            </div>

            <div class="col-lg-3">
            </div>
        </div>

    </div>
</section>
