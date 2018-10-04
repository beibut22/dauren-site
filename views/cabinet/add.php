<?php

use app\models\AddForm;

/* @var $this yii\web\View */
/* @var $addForm AddForm */
/* @var $categories array */


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

                    <?php if (Yii::$app->session->hasFlash('success')) : ?>
                        <br>
                        <div class="alert alert-success">
                            <?= Yii::$app->session->getFlash('success') ?>
                        </div>
                    <?php endif; ?>

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
                        'options' => ['class' => 'form-additional', 'enctype' => 'multipart/form-data'],
                    ]); ?>

                    <?= $form->field($addForm, 'name')->textInput(['placeholder' => 'Название объявления']) ?>

                    <?= $form->field($addForm, 'categoryId')->dropDownList($categories) ?>

                    <?= $form->field($addForm, 'productType')->dropDownList([
                        'sell' => 'Продажа',
                        'buy' => 'Покупка',
                    ]) ?>

                    <?= $form->field($addForm, 'country')->dropDownList([
                        'Казахстан' => 'Казахстан',
                    ]) ?>

                    <?= $form->field($addForm, 'city')->dropDownList([
                        'Астана' => 'Астана',
                        'Алматы' => 'Алматы',
                    ]) ?>

                    <?= $form->field(
                        $addForm,
                        'address'
                    )->textInput(['placeholder' => 'Добавьте адрес где находится объект']) ?>

                    <?= $form->field(
                        $addForm,
                        'zip'
                    )->textInput(['placeholder' => 'Добавьте почтовый индекс объекта']) ?>

                    <?= $form->field($addForm, 'lawType')->dropDownList([
                        'Частная' => 'Частная',
                        'Арендованная' => 'Арендованная',
                    ]) ?>

                    <?= $form->field($addForm, 'licensed')->dropDownList([
                        '0' => 'Не лицензированная',
                        '1' => 'Лицензированная',
                    ]) ?>

                    <?= $form->field(
                        $addForm,
                        'priceActive'
                    )->textInput(['placeholder' => 'Стоимость собственных активов объекта в тенге']) ?>

                    <?= $form->field(
                        $addForm,
                        'priceProfit'
                    )->textInput(['placeholder' => 'Приблизительная доходность объекта']) ?>

                    <?= $form->field($addForm, 'perspectives')->textInput() ?>

                    <?= $form->field($addForm, 'price')->textInput(['placeholder' => 'Цена объекта без торгов']) ?>

                    <?= $form->field($addForm, 'priceTrade')->textInput(['placeholder' => 'Возможная цена объекта при торге']) ?>

                    <?= $form->field($addForm, 'description')->textarea(['placeholder' => 'Добавьте словестное описание объекта']) ?>

                    <?= $form->field($addForm, 'imgFile1')->fileInput() ?>

                    <?= $form->field($addForm, 'imgFile2')->fileInput() ?>

                    <?= $form->field($addForm, 'imgFile3')->fileInput() ?>

                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Добавить объявление</button>
                        </div>
                    </div>


                    <?php \yii\widgets\ActiveForm::end(); ?>

                </div><!-- /.widget-form-->
            </div> <!-- /. widget-table-->
        </div><!-- /.center-content -->
    </div>
    </div>
</main><!-- /.main-part-->
