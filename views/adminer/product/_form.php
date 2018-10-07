<?php

use app\models\Product;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model Product */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fk_category')->dropDownList($categories) ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'product_type')->dropDownList([
        'sell' => 'Продажа',
        'buy' => 'Покупка',
    ]) ?>

    <?= $form->field($model, 'country')->dropDownList([
        'Казахстан' => 'Казахстан',
    ]) ?>

    <?= $form->field($model, 'city')->dropDownList([
        'Астана' => 'Астана',
        'Алматы' => 'Алматы',
    ]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'law_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'licensed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_active')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_profit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perspectives')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perspectives')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_trade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'img1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img3')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'status')->dropDownList([
        Product::STATUS_DISABLED => 'Не отображается',
        Product::STATUS_ENABLED => 'Отображается',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить',
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
