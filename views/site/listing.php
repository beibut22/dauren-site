<?php


use app\models\Category;
use app\models\Product;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $latestProducts Product[] */
/* @var $categories Category[] */

$this->title = 'Объявления. 1biz.kz - продажа готового бизнеса в Казахстане';
?>
<div class="top-box-mask"></div>
</header><!-- /.header-->
<main class="main section-color-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="h-side top-pad h-side-slim clearfix">
                    <div class="properties-filter">
                        <div class="form-group">
                            <select class="form-control selectpicker select-small" name="filter" id="search">
                                <option value="0">Сортировать</option>
                                <option value="2">Цена -> меньше</option>
                                <option value="1">Цена -> больше</option>
                            </select>
                        </div>
                    </div>
                </div> <!-- /. content-header -->

                <div class="properties">
                    <div class="row">
                        <?= ListView::widget([
                            'dataProvider' => $latestProducts,
                            'layout' => "{items}",
                            'itemView' => function ($model, $key, $index, $widget) {
                                return "<div class=\"col-md-4 col-sm-6\">
                                <div class=\"property-card card\">
                                    <div class=\"property-card-header image-box\">
                                        <img src=\"".$model->img1."\" alt=\"\" class=\"\"/>
                                        <div class=\"budget\"><i class=\"fa fa-star\"></i></div>
                                        <a href=\"/item/".$model->id."\" class=\"property-card-hover\">
                                            <img src=\"assets/img/property-hover-arrow.png\" alt=\"\" class=\"left-icon\"/>
                                            <img src=\"assets/img/plus.png\" alt=\"\" class=\"center-icon\"/>
                                            <img src=\"assets/img/icon-notice.png\" alt=\"\" class=\"right-icon\"/>
                                        </a>
                                    </div>

                                    <div class=\"property-card-tags\">
                                        <span class=\"label label-default label-tag-warning\">".$model->law_type."</span>
                                    </div>
                                    <div class=\"property-card-box card-box card-block\">
                                        <h3 class=\"property-card-title\"><a href=\"/item/".$model->id."\">".$model->name."</a>
                                        </h3>
                                        <div class=\"property-card-descr\">".$model->description."...</div>
                                        <div class=\"property-preview-footer  clearfix\">
                                            <div class=\"property-preview-f-left text-color-primary\">
                                                <span class=\"property-card-value\">
                                                    ".$model->price_trade." тенге
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
                        <?= LinkPager::widget(['pagination' => $latestProducts->pagination]); ?>
                    </nav>
                </div> <!-- /.properties-->
            </div><!-- /.center-content -->

            <div class="col-md-3 sidebar-right">

                <div class="widget widget-box  box-container">
                    <div class="widget-header text-uppercaser">
                        <h2>Фильтр</h2>
                    </div>

                    <form action="/listing" method="get">
                        <div class="form-additional npad">
                            <div class="form-group">
                                <select class="form-control selectpicker select-secondary" name="category">
                                    <option selected value="0">Категория бизнеса</option>
                                    <?php foreach ($categories as $key => $value) { ?>
                                        <option <?php if (Yii::$app->request->get('category') == $key) {
                                            echo 'selected';
                                        } ?> value="<?= $key ?>"><?= $value ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input name="from" type="text" class="form-control" placeholder="Цена от"
                                       value="<?= Yii::$app->request->get('from') ?>"/>
                            </div>

                            <div class="form-group">
                                <input name="to" type="text" class="form-control" placeholder="Цена до"
                                       value="<?= Yii::$app->request->get('to') ?>"/>
                            </div>

                            <div class="form-group">
                                <select class="form-control selectpicker select-secondary" name="law_type">
                                    <option selected value="">Право собственности</option>
                                    <option <?php if (Yii::$app->request->get('law_type') == 'Частная') {
                                        echo 'selected';
                                    } ?> value="Частная">Частная
                                    </option>
                                    <option <?php if (Yii::$app->request->get('law_type') == 'Арендованная') {
                                        echo 'selected';
                                    } ?> value="Арендованная">Арендованная
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="form-control selectpicker select-secondary" name="licensed">
                                    <option selected value="-1">Лицензирование</option>
                                    <option <?php if (Yii::$app->request->get('licensed') == '0') {
                                        echo 'selected';
                                    } ?> value="0">Не требуется
                                    </option>
                                    <option <?php if (Yii::$app->request->get('licensed') == '1') {
                                        echo 'selected';
                                    } ?> value="1">Требуется
                                    </option>
                                </select>
                            </div>


                            <div class="form-group">
                                <button class="btn btn-primary btn-wide color-primary" type='submit'>Найти</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.right side bar -->
        </div>
    </div>
</main><!-- /.main-part-->