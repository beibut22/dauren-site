<?php

use app\models\Product;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $products Product[] */

$this->title = 'Мои объявления. 1biz.kz - продажа готового бизнеса в Казахстане';
?>
<main class="main section-color-primary">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <section class="top-title">
                    <ul class="breadcrumb">
                        <li class="item"><a href="/"> Главная </a></li>
                        <li class="item"> Мои объявления</li>
                    </ul>
                    <h1 class="h-side-title page-title page-title-big text-color-primary">Мои объявления</h1>
                </section> <!-- /. content-header -->
                <div class="widget widget-box box-container widget-mylistings">
                    <a href="add"><button type="button" class="btn btn-success">Добавить объявление</button></a>
                    <br>&nbsp;
                    <div class="">
                        <?php
                        echo GridView::widget(
                            [
                                'tableOptions' => ['class' => 'table table-striped footable-sort'],
                                'summary' => '',
                                'dataProvider' => $products,
                                'showFooter' => false,
                                'columns' => [
                                    'id',
                                    'name' => [
                                        'label' => 'Название',
                                        'format' => 'raw',
                                        'value' => function ($data) {
                                            return $data->name;
                                        },
                                    ],
                                    'fk_category' => [
                                        'label' => 'Категория',
                                        'format' => 'raw',
                                        'value' => function ($data) {
                                            return $data->fk_category;
                                        },
                                    ],
                                    'product_type' => [
                                        'label' => 'Тип объявления',
                                        'format' => 'raw',
                                        'value' => function ($data) {
                                            return $data->product_type;
                                        },
                                    ],
                                    'country' => [
                                        'label' => 'Адрес',
                                        'format' => 'raw',
                                        'value' => function ($data) {
                                            return $data->country.', '.$data->zip.' '.$data->city.', '.$data->address;
                                        },
                                    ],
                                    'price' => [
                                        'label' => 'Цена объявления',
                                        'format' => 'raw',
                                        'value' => function ($data) {
                                            return $data->price;
                                        },
                                    ],
                                    'address' => [
                                        'label' => 'Адрес',
                                        'format' => 'raw',
                                        'value' => function ($data) {
                                            return $data->address;
                                        },
                                    ],
                                    'status' => [
                                        'label' => 'Статус',
                                        'format' => 'html',
                                        'headerOptions' => [],
                                        'contentOptions' => [],
                                        'value' => function ($data) {
                                            if ($data->status == Product::STATUS_DISABLED) {
                                                $status = 'Не показывается';
                                            } else {
                                                $status = 'Показывается';
                                            }

                                            return $status;
                                        },
                                    ],
                                ],
                            ]
                        ); ?>
                    </div>
                </div> <!-- /. widget-table-->
            </div><!-- /.center-content -->
        </div>
    </div>
</main><!-- /.main-part-->
