<?php


use app\models\Order;
use app\models\Product;
use app\modules\adminer\models\search\ProductSearch;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Объявления';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget(
        [
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                'id',
                'user.username',
                'category.name',
                'name',
                'city',
                'status' => [
                    'attribute' => 'status',
                    'format' => 'raw',
                    'value' => function ($data) {
                        if ($data->status == Product::STATUS_DISABLED) {
                            return '<span class="text-danger">Не отображается</span>';
                        }

                        return '<span class="text-info">Отображается</span>';
                    },
                ],
                'created_at' => [
                    'attribute' => 'created_at',
                    'format' => 'raw',
                    'value' => function ($data) {
                        return date("d.m в H:i", strtotime($data->created_at));
                    },
                ],
                ['class' => 'yii\grid\ActionColumn', 'template' => '{update} {delete}'],
            ],
        ]
    ); ?>

</div>
