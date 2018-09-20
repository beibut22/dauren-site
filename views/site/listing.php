<?php


use app\models\Category;
use app\models\Product;

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

                        <?php foreach ($latestProducts as $product) { ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="property-card card">
                                    <div class="property-card-header image-box">
                                        <img src="<?= $product->img1 ?>" alt="" class=""/>
                                        <div class="budget"><i class="fa fa-star"></i></div>
                                        <a href="/product/<?= $product->id ?>" class="property-card-hover">
                                            <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon"/>
                                            <img src="assets/img/plus.png" alt="" class="center-icon"/>
                                            <img src="assets/img/icon-notice.png" alt="" class="right-icon"/>
                                        </a>
                                    </div>

                                    <div class="property-card-tags">
                                        <span class="label label-default label-tag-warning">Аренда</span>
                                    </div>
                                    <div class="property-card-box card-box card-block">
                                        <h3 class="property-card-title"><a href="listing.html"><?= $product->name ?></a>
                                        </h3>
                                        <div class="property-card-descr"><?= $product->description ?>...</div>
                                        <div class="property-preview-footer  clearfix">
                                            <div class="property-preview-f-left text-color-primary">
                                                <span class="property-card-value">
                                                    <?=$product->price_trade?> тенге
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div><!-- /.properties -->
                    <nav class="text-center">
<!--                        <ul class="pagination">-->
<!--                            <li class="page-item"><a class="page-link active" href="#">1</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--                        </ul>-->
                    </nav>
                </div> <!-- /.properties-->
            </div><!-- /.center-content -->

            <div class="col-md-3 sidebar-right">

                <div class="widget widget-box  box-container">
                    <div class="widget-header text-uppercaser">
                        <h2>Фильтр</h2>
                    </div>

                    <div class="form-additional npad">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Цена от"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Цена до"/>
                        </div>
                        <div class="form-group">
                            <select class="form-control selectpicker select-secondary" name="category">
                                <option selected value="0">Категория бизнеса</option>
                                <?php foreach ($categories as $key => $value) { ?>
                                    <option value="<?= $key ?>"><?= $value ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-wide color-primary" type='submit'>Обновить результаты
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.right side bar -->
        </div>
    </div>
</main><!-- /.main-part-->