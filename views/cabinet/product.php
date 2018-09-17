<?php

use app\models\AddForm;

/* @var $this yii\web\View */
/* @var $editForm AddForm */
/* @var $categories array */


$this->title = 'Редактировать объявление:'.$editForm->name.'. 1biz.kz - продажа готового бизнеса в Казахстане';
?>
<main class="main section-color-primary">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <section class="top-title">
                    <ul class="breadcrumb">
                        <li class="item"><a href="/"> Главная </a></li>
                        <li class="item"><a href="/cabinet/products"> Мои объявления </a></li>
                        <li class="item"> Редактировать объявление</li>
                    </ul>
                    <h1 class="h-side-title page-title page-title-big text-color-primary">Редактировать объявление</h1>
                    <?php if (Yii::$app->session->hasFlash('success')): ?>
                        <br>
                        <div class="alert alert-success">
                            <?= Yii::$app->session->getFlash('success') ?>
                        </div>
                    <?php endif; ?>

                </section> <!-- /. content-header -->
                <div class="widget  widget-box box-container widget-form form-main" id="form2">
                    <div class="widget-header">
                        <h2>Редактировать объявление</h2>
                    </div>

                    <?php $form = \yii\widgets\ActiveForm::begin([
                        'fieldConfig' => [
                            'template' => "<div class='control-group'> {label} </div> <div class='controls'>{input} {error}</div>\n",
                            'labelOptions' => ['class' => 'control-label'],
                        ],
                        'options' => ['class' => 'form-additional', 'enctype' => 'multipart/form-data'],
                    ]); ?>

                    <?= $form->field($editForm, 'name')->textInput(['placeholder' => 'Название объявления']) ?>

                    <?= $form->field($editForm, 'categoryId')->dropDownList($categories) ?>

                    <?= $form->field($editForm, 'productType')->dropDownList([
                        'sell' => 'Продажа',
                        'buy' => 'Покупка',
                    ]) ?>

                    <?= $form->field($editForm, 'country')->dropDownList([
                        'Казахстан' => 'Казахстан',
                    ]) ?>

                    <?= $form->field($editForm, 'city')->dropDownList([
                        'Астана' => 'Астана',
                        'Алматы' => 'Алматы',
                    ]) ?>

                    <?= $form->field($editForm,
                        'address')->textInput(['placeholder' => 'Добавьте адрес где находится объект']) ?>

                    <?= $form->field($editForm,
                        'zip')->textInput(['placeholder' => 'Добавьте почтовый индекс объекта']) ?>

                    <?= $form->field($editForm, 'lawType')->dropDownList([
                        'Частная' => 'Частная',
                        'Арендованная' => 'Арендованная',
                    ]) ?>

                    <?= $form->field($editForm, 'licensed')->dropDownList([
                        '0' => 'Не лицензированная',
                        '1' => 'Лицензированная',
                    ]) ?>

                    <?= $form->field($editForm,
                        'priceActive')->textInput(['placeholder' => 'Стоимость собственных активов объекта в тенге']) ?>

                    <?= $form->field($editForm,
                        'priceProfit')->textInput(['placeholder' => 'Приблизительная доходность объекта']) ?>

                    <?= $form->field($editForm, 'perspectives')->textInput() ?>

                    <?= $form->field($editForm, 'price')->textInput(['placeholder' => 'Цена объекта без торгов']) ?>

                    <?= $form->field($editForm,
                        'priceTrade')->textInput(['placeholder' => 'Возможная цена объекта при торге']) ?>

                    <?= $form->field($editForm,
                        'description')->textarea(['placeholder' => 'Добавьте словестное описание объекта']) ?>

<!--                    --><?//= $form->field($addForm, 'imgFile1')->fileInput() ?>
<!---->
<!--                    --><?//= $form->field($addForm, 'imgFile2')->fileInput() ?>
<!---->
<!--                    --><?//= $form->field($addForm, 'imgFile3')->fileInput() ?>

                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Сохранить объявление</button>
                        </div>
                    </div>


                    <?php \yii\widgets\ActiveForm::end(); ?>

                </div><!-- /.widget-form-->
            </div> <!-- /. widget-table-->
        </div><!-- /.center-content -->
    </div>
    </div>
</main><!-- /.main-part-->
