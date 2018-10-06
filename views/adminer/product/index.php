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
                'fk_user',
                'fk_category',
                'name',
                'city',
//                'id' => [
//                    'attribute' => 'id',
//                    'label' => '#',
//                    'format' => 'raw',
//                    'value' => function ($data) {
//                        return "<a target='_blank' href='/order/".$data->hash."'>".$data->id."</a>";
//                    },
//                ],
//                'date' => [
//                    'attribute' => 'date',
//                    'format' => 'raw',
//                    'value' => function ($data) {
//                        return date("d.m в H:i", strtotime($data->date));
//                    },
//                ],
//                'curin' => [
//                    'attribute' => 'curin',
//                    'label' => 'Данные заявки',
//                    'format' => 'raw',
//                    'value' => function ($data) {
//                        return $data->amountin." ".$data->curin." <br> ".$data->amountout." ".$data->curout;
//                    },
//                ],
//                'profit' => [
//                    'attribute' => 'profit',
//                    'format' => 'raw',
//                    'value' => function ($data) {
//                        if ($data->profit) {
//                            return $data->profit;
//                        } else {
//                            return '-';
//                        }
//                    },
//                ],
//                'walletout' => [
//                    'attribute' => 'walletout',
//                    'format' => 'raw',
//                    'value' => function ($data) {
//                        $str = mb_substr($data->walletout, 0, 20, 'UTF-8');
//                        if (strlen($data->walletout) > 20) {
//                            $str .= '...';
//                        }
//
//                        return $str;
//                    },
//                ],
//                'email:email',
//                'info' => [
//                    'attribute' => 'info',
//                    'format' => 'raw',
//                    'value' => function ($data) {
//
//                        $info = $data->info." ".$data->info2;
//
//                        if (in_array($data->curin, ['btc', 'ltc', 'eth', 'xmr', 'xrp'])) {
//                            $info = $data->identity;
//                        }
//
//                        $str = mb_substr($info, 0, 20, 'UTF-8');
//                        if (strlen($info) > 20) {
//                            $str .= '...';
//                        }
//
//                        return $str;
//                    },
//                ],
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
                ['class' => 'yii\grid\ActionColumn', 'template' => '{update} {delete}'],
            ],
        ]
    ); ?>

</div>
