<?php

use app\models\Category;
use app\models\Product;
use app\models\Favorite;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $favorites Favorite[] */
/* @var $categories Category[] */

$this->title = 'Избранное. 1biz.kz - продажа готового бизнеса в Казахстане';
?>
<div class="top-box-mask"></div>
</header><!-- /.header-->
<main class="main section-color-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            <section class="top-title">
                    <ul class="breadcrumb">
                        <li class="item"><a href="/"> Главная </a></li>
                        <li class="item"> Избранное</li>
                    </ul>
                    <h1 class="h-side-title page-title page-title-big text-color-primary">Избранное</h1>

                    <?php if (Yii::$app->session->hasFlash('success')): ?>
                        <br>
                        <div class="alert alert-success">
                            <?= Yii::$app->session->getFlash('success') ?>
                        </div>
                    <?php endif; ?>

                </section> <!-- /. content-header -->

                <div class="properties">
                    <div class="row">
                        
                        <?= ListView::widget([
                            'dataProvider' => $favorites,
                            'layout' => "{items}",
                            'itemView' => function ($model, $key, $index, $widget) {
                                return "<div class=\"col-md-4 col-sm-6\">
                                <div class=\"property-card card\">
                                    <div class=\"property-card-header image-box\">
                                        <img src=\"".$model->product->img1."\" alt=\"\" class=\"\"/>
                                        <div class=\"budget\"><i class=\"fa fa-star\"></i></div>
                                        <a href=\"/item/".$model->product->id."\" class=\"property-card-hover\">
                                            <img src=\"assets/img/property-hover-arrow.png\" alt=\"\" class=\"left-icon\"/>
                                            <img src=\"assets/img/plus.png\" alt=\"\" class=\"center-icon\"/>
                                            <img src=\"assets/img/icon-notice.png\" alt=\"\" class=\"right-icon\"/>
                                        </a>
                                    </div>

                                    <div class=\"property-card-tags\">
                                        <span class=\"label label-default label-tag-warning\">".$model->product->law_type."</span>
                                    </div>
                                    <div class=\"property-card-box card-box card-block\">
                                        <h3 class=\"property-card-title\"><a href=\"/item/".$model->product->id."\">".$model->product->name."</a>
                                        </h3>
                                        <div class=\"property-card-descr\">".$model->product->description."...</div>
                                        <div class=\"property-preview-footer  clearfix\">
                                            <div class=\"property-preview-f-left text-color-primary\">
                                                <span class=\"property-card-value\">
                                                    ".$model->product->price_trade." тенге
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                            },
                            'pager' => [],
                        ]);
                        ?>

                    </div><!-- /.properties -->
                    <nav class="text-center">
                        <?= LinkPager::widget(['pagination' => $favorites->pagination]); ?>
                    </nav>
                </div> <!-- /.properties-->
            </div><!-- /.center-content -->

            <div class="col-md-3 sidebar-right">
            </div>
            <!-- /.right side bar -->
        </div>
    </div>
</main><!-- /.main-part-->