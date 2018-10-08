<?php


use app\models\search\CategorySearch;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget(
        [
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                'id',
                'name',
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
