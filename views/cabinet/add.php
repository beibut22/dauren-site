<?php

use yii\helpers\Html;

/* @var $this yii\web\View */


$this->title = 'Добавить объявление. 1biz.kz - продажа готового бизнеса в Казахстане';
?>
<main class="main section-color-primary">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <section class="top-title">
                    <ul class="breadcrumb">
                        <li class="item"><a href="/"> Главная </a></li>
                        <li class="item"> Добавить объявление</li>
                    </ul>
                    <h1 class="h-side-title page-title page-title-big text-color-primary">Добавить объявление</h1>
                </section> <!-- /. content-header -->
                <div class="widget  widget-box box-container widget-form form-main" id="form2">
                    <div class="widget-header">
                        <h2>Новое объявление</h2>
                    </div>

                    <?php $form = \yii\widgets\ActiveForm::begin([
                        'fieldConfig' => [
                            'template' => "<div class='control-group'> {label} </div> <div class='controls'>{input} {error}</div>\n",
                            'labelOptions' => ['class' => 'control-label'],
                        ],
                    ]); ?>

                    <?php \yii\widgets\ActiveForm::end(); ?>

<!--                    <form method="post" class="form-additional">-->
<!--                        --><?//= Html:: hiddenInput(\Yii:: $app->getRequest()->csrfParam,
//                            \Yii:: $app->getRequest()->getCsrfToken(), []) ?>
<!--                        <div class="control-group">-->
<!--                            <label class="control-label" for="currentPassword">Текущий пароль</label>-->
<!--                            <div class="controls">-->
<!--                                <input type="password" name="current_password" value="" class="form-control"-->
<!--                                       id="currentPassword" placeholder="Введите текущий пароль" autocomplete="off"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="control-group">-->
<!--                            <label class="control-label" for="newPassword">Новый пароль</label>-->
<!--                            <div class="controls">-->
<!--                                <input type="password" name="new_password" value="" class="form-control"-->
<!--                                       id="newPassword" placeholder="Введите новый пароль" autocomplete="off"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="control-group">-->
<!--                            <label class="control-label">Повторить пароль</label>-->
<!--                            <div class="controls">-->
<!--                                <input type="password" name="new_password_repeat" value="" class="form-control"-->
<!--                                       id="inputPasswordConfirm" placeholder="Повторите новый пароль"-->
<!--                                       autocomplete="off"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="control-group">-->
<!--                            <div class="controls">-->
<!--                                <button type="submit" class="btn btn-success">Сохранить</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->

                </div><!-- /.widget-form-->
            </div> <!-- /. widget-table-->
        </div><!-- /.center-content -->
    </div>
    </div>
</main><!-- /.main-part-->
