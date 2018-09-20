<?php


use app\models\Category;
use app\models\Product;

/* @var $this yii\web\View */
/* @var $latestProducts Product[] */
/* @var $categories Category[] */

$this->title = '1biz.kz - продажа готового бизнеса в Казахстане';
?>
<div class="top-box-mask"></div>
<section class="header-slider">
    <!-- Carousel container -->
    <div id="header-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        </ol>
        <!-- Content -->
        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="item active">
                <img src="img/chi-b2.jpg" alt="Sunset over beach" />
                <div class="carousel-caption">
                    <h3 class="carousel-caption-title"><span>Продажа готового бизнеса в вашем городе</span><i class="line-bottom color-primary"></i></h3>
                    <div class="s-description"><p>Более сотни готовых бизнесов, готовых к продаже под ключ в вашем городе</p></div>
                    <!--                        <a href="#" class="btn btn-primary color-primary"><span>Найти свой бизнес</span></a>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel container -->
</section><!-- /.header-slider-->
</header><!-- /.header-->
<main class="main section-color-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="h-side top-pad h-side-slim clearfix">
                    <div class="properties-filter">
<!--                        <div class="form-group">-->
<!--                            <select class="form-control selectpicker select-small" name="filter" id="search">-->
<!--                                <option value="0">Сортировать по</option>-->
<!--                                <option value="1">Дате добавления (новые сначала)</option>-->
<!--                                <option value="2">Цене (дешевые сначала)</option>-->
<!--                            </select>-->
<!--                        </div>-->
                    </div>
                </div> <!-- /. content-header -->

                <div class="properties">
                    <div class="row">

                        <?php foreach ($latestProducts as $product){ ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="property-card card  treefield-card">
                                <div class="property-card-header image-box">
                                    <img src="<?=$product->img1?>" alt="" class="" />
<!--                                    <div class="budget"><i class="fa fa-star"></i></div>-->
                                    <a href="/product/<?=$product->id?>" class="property-card-hover">
                                        <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                        <img src="img/plus.png" alt="" class="center-icon" />
                                        <img src="img/icon-notice.png" alt="" class="right-icon" />
                                    </a>
                                </div>

                                <div class="property-card-box card-box card-block">
                                    <h3 class="property-card-title"><i class="fa fa-building-o color-primary"></i><a href="/product/<?=$product->id?>"><?=$product->name?></a></h3>
                                    <ul class="treefield-categories">
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html"><?=$product->category->name?></a>

                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Стоимость</a>
                                            <span class="count text-color-primary"><?=$product->price?> тенге</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Доход</a>
                                            <span class="count text-color-primary"><?=$product->price_profit?> тенге</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Город</a>
                                            <span class="count text-color-primary"><?=$product->city?></span>
                                        </li>
                                        <li>
                                            <a href="/product/<?=$product->id?>"><span class="count text-color-primary">Подробнее...</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div><!-- /.properties -->
<!--                    <nav class="text-center">-->
<!--                        <ul class="pagination">-->
<!--                            <li class="page-item"><a class="page-link active" href="#">1</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--                        </ul>-->
<!--                    </nav>-->
                </div> <!-- /.properties-->
            </div><!-- /.center-content -->
            <div class="col-md-3 sidebar-right">

                <div class="widget widget-box box-container">
                    <div class="widget-header text-uppercaser">
                        <h2>Фильтр</h2>
                    </div>
                    <form action="/listing" method="get">
                        <div class="form-additional npad">
                            <div class="form-group">
                                <select class="form-control selectpicker select-secondary" name="category">
                                    <option selected value="0">Категория бизнеса</option>
                                    <?php foreach ($categories as $key => $value) { ?>
                                        <option value="<?= $key ?>"><?= $value ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input name="from" type="text" class="form-control" placeholder="Цена от"/>
                            </div>

                            <div class="form-group">
                                <input name="to" type="text" class="form-control" placeholder="Цена до"/>
                            </div>


                            <div class="form-group">
                                <button class="btn btn-primary btn-wide color-primary" type='submit'>Найти</button>
                            </div>
                        </div>
                    </form>
                </div>
<!--                <div class="widget widget-box box-container">-->
<!--                    <div class="widget-header text-uppercaser">-->
<!--                        <h3>Рекомендуем</h3>-->
<!--                    </div>-->
<!--                    <ul class="widget-list text-uppercase text-center npad">-->
<!--                        <li><a href="#" class="widget-item">Платное размещение</a></li>-->
<!--                        <li><a href="#" class="widget-item">Платное размещение</a></li>-->
<!--                        <li><a href="#" class="widget-item">Платное размещение</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
            </div>
            <!-- /.right side bar -->
        </div>
    </div>
</main><!-- /.main-part-->

<section class="section news section-color-secondary">
    <div class="container">
        <div class="section-title">
            <h2 class="section-title text-center"><span>Новости бизнеса</span></h2>
        </div>
        <div class="news-slide">
            <div id="news-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <h3 class="title"><a href="page_gallery.html">Find your happy family house</a></h3>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="news-thumbnail hover-default">
                                                <img src="img/placeholders/700x350.png" alt="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="img/plus.png" alt="" class="center-icon" />
                                                    <img src="img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 description">
                                            This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <h3 class="title"><a href="page_gallery.html">Healthy body important for success in business</a></h3>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="news-thumbnail hover-default">
                                                <img src="img/placeholders/700x350.png" alt="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="img/plus.png" alt="" class="center-icon" />
                                                    <img src="img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 description">
                                            This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <h3 class="title"><a href="page_gallery.html">Sell your house easily with nice grass</a></h3>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="news-thumbnail hover-default">
                                                <img src="img/placeholders/700x350.png" alt="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="img/plus.png" alt="" class="center-icon" />
                                                    <img src="img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 description">
                                            This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <h3 class="title"><a href="page_gallery.html">Education and over-thinking</a></h3>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="news-thumbnail hover-default">
                                                <img src="img/placeholders/700x350.png" alt="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="img/plus.png" alt="" class="center-icon" />
                                                    <img src="img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 description">
                                            This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <h3 class="title"><a href="page_gallery.html">New modern house designs</a></h3>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="news-thumbnail hover-default">
                                                <img src="img/placeholders/700x350.png" alt="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="img/plus.png" alt="" class="center-icon" />
                                                    <img src="img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 description">
                                            This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <h3 class="title"><a href="page_gallery.html">Better portal for large City</a></h3>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="news-thumbnail hover-default">
                                                <img src="img/placeholders/700x350.png" alt="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="img/plus.png" alt="" class="center-icon" />
                                                    <img src="img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 description">
                                            This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <h3 class="title"><a href="page_gallery.html">Clean environment importance for healthy life</a></h3>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="news-thumbnail hover-default">
                                                <img src="img/placeholders/700x350.png" alt="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="img/plus.png" alt="" class="center-icon" />
                                                    <img src="img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 description">
                                            This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <h3 class="title"><a href="page_gallery.html">Become successfully speaker</a></h3>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="news-thumbnail hover-default">
                                                <img src="img/placeholders/700x350.png" alt="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="img/plus.png" alt="" class="center-icon" />
                                                    <img src="img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 description">
                                            This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <h3 class="title"><a href="page_gallery.html">Yacht prices again changing</a></h3>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="news-thumbnail hover-default">
                                                <img src="img/placeholders/700x350.png" alt="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="img/plus.png" alt="" class="center-icon" />
                                                    <img src="img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 description">
                                            This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <h3 class="title"><a href="page_gallery.html">Women successfully ratio</a></h3>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="news-thumbnail hover-default">
                                                <img src="img/placeholders/700x350.png" alt="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="img/plus.png" alt="" class="center-icon" />
                                                    <img src="img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 description">
                                            This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <h3 class="title"><a href="page_gallery.html">Toys affect children's nature</a></h3>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="news-thumbnail hover-default">
                                                <img src="img/placeholders/700x350.png" alt="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="img/plus.png" alt="" class="center-icon" />
                                                    <img src="img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 description">
                                            This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <h3 class="title"><a href="page_gallery.html">Become a better guest</a></h3>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="news-thumbnail hover-default">
                                                <img src="img/placeholders/700x350.png" alt="" />
                                                <a href="listing.html" class="property-card-hover">
                                                    <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <img src="img/plus.png" alt="" class="center-icon" />
                                                    <img src="img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 description">
                                            This  is simply dummy text of the printing and typesetting industry. That m has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Layout.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="carousel-indicators pagination-carousel">
                    <li data-target="#news-carousel" data-slide-to="0" class="active" ><a class="" href="#"> 1 </a></li>
                    <li  data-target="#news-carousel" data-slide-to="1" ><a class="" href="#">2</a></li>
                    <li  data-target="#news-carousel" data-slide-to="2" ><a class="" href="#">3</a></li>
                </ul>
            </div>
        </div><!-- /.news-slider-->
    </div>
</section><!-- /.news -->