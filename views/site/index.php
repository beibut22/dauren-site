<?php

/* @var $this yii\web\View */

$this->title = '1biz.kz - продажа готового бизнеса в Казахстане';
?>
<div class="top-box-mask"></div>
<div class="container">
    <section class="header-slider">
        <!-- Carousel container -->
        <div id="header-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <!--                        <li data-target="#header-slider" data-slide-to="0" class="active"></li>-->
                <!--                        <li data-target="#header-slider" data-slide-to="1"></li>-->
                <!--                        <li data-target="#header-slider" data-slide-to="2"></li>-->
            </ol>
            <!-- Content -->
            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="item active">
                    <img src="img/chi-b2.jpg" alt="Sunset over beach" />
                    <div class="carousel-caption">
                        <h3 class="carousel-caption-title"><span>Продажа готового бизнеса в вашем городе</span><i class="line-bottom color-primary"></i></h3>
                        <div class="s-description"><p>Более сотни готовых бизнесов, готовых к продаже под ключ в вашем городе</p></div>
                        <a href="listing.html" class="btn btn-primary color-primary"><span>Найти свой бизнес</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel container -->
    </section><!-- /.header-slider-->
    <section class="search-form color-primary parallax">
        <h3 class="hidden">Search</h3>
        <div class="container">
            <form action="#" class="form-horisontal">
                <div class="row">
                    <!--                            <div class="col-md-2">-->
                    <!--                                <div class="form-group">-->
                    <!--                                    <select class="form-control selectpicker color-secondary" name="input" >-->
                    <!--                                        <option value="0">Цель</option>-->
                    <!--                                        <option value="1">Продажа</option>-->
                    <!--                                        <option value="2">Аренда</option>-->
                    <!--                                    </select>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control color-secondary" placeholder="Введите Город, Адрес, Индекс"  />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <select class="form-control selectpicker color-secondary" name="input" >
                                <option value="0">Тип бизнеса</option>
                                <option value="1">Магазин</option>
                                <option value="2">Ресторан</option>
                                <option value="3">Отель</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control  color-secondary" placeholder="Приемлимая цена" />
                        </div>
                    </div>
                    <div class="col-md-1 form-group">
                        <button type="submit" class="btn btn-search focus-color"><i class="fa fa-search icon-white"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </section><!-- /.header-search-->
</div>
</header><!-- /.header-->
<main class="main section-color-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="h-side top-pad h-side-slim clearfix">
                    <div class="properties-filter">
                        <div class="form-group">
                            <select class="form-control selectpicker select-small" name="filter" id="search">
                                <option value="0">Сортировать по</option>
                                <option value="1">Дате добавления (новые сначала)</option>
                                <option value="2">Цене (дешевые сначала)</option>
                            </select>
                        </div>
                    </div>
                </div> <!-- /. content-header -->
                <div class="properties">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="property-card card  treefield-card">
                                <div class="property-card-header image-box">
                                    <img src="img/placeholders/395x250.png" alt="" class="" />
                                    <div class="budget"><i class="fa fa-star"></i></div>
                                    <a href="listing.html" class="property-card-hover">
                                        <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                        <img src="img/plus.png" alt="" class="center-icon" />
                                        <img src="img/icon-notice.png" alt="" class="right-icon" />
                                    </a>
                                </div>
                                <div class="property-card-box card-box card-block">
                                    <h3 class="property-card-title"><i class="fa fa-car color-primary"></i><a href="listing.html">Car</a></h3>
                                    <ul class="treefield-categories">
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Hybrid cars</a>
                                            <span class="count text-color-primary">7</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Classic cars</a>
                                            <span class="count text-color-primary">1</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Modern cars</a>
                                            <span class="count text-color-primary">8</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Infinity cars</a>
                                            <span class="count text-color-primary">2</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Fast cars</a>
                                            <span class="count text-color-primary">3</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="property-card card  treefield-card">
                                <div class="property-card-header image-box">
                                    <img src="img/placeholders/395x250.png" alt="" class="" />
                                    <a href="listing.html" class="property-card-hover">
                                        <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                        <img src="img/plus.png" alt="" class="center-icon" />
                                        <img src="img/icon-notice.png" alt="" class="right-icon" />
                                    </a>
                                </div>
                                <div class="property-card-box card-box card-block">
                                    <h3 class="property-card-title"><i class="fa fa-motorcycle color-primary"></i><a href="listing.html">Bike</a></h3>
                                    <ul class="treefield-categories">
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Adventure</a>
                                            <span class="count text-color-primary">3</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Racing</a>
                                            <span class="count text-color-primary">15</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Commuter bikes</a>
                                            <span class="count text-color-primary">7</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Touring bikes</a>
                                            <span class="count text-color-primary">75</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="property-card card  treefield-card">
                                <div class="property-card-header image-box">
                                    <img src="img/placeholders/395x250.png" alt="" class="" />
                                    <a href="listing.html" class="property-card-hover">
                                        <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                        <img src="img/plus.png" alt="" class="center-icon" />
                                        <img src="img/icon-notice.png" alt="" class="right-icon" />
                                    </a>
                                </div>
                                <div class="property-card-box card-box card-block">
                                    <h3 class="property-card-title"><i class="fa fa-truck color-primary"></i><a href="listing.html">Truck</a></h3>
                                    <ul class="treefield-categories">
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Bus</a>
                                            <span class="count text-color-primary">30</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Tractor</a>
                                            <span class="count text-color-primary">6</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_car.html">Wagon</a>
                                            <span class="count text-color-primary">10</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="property-card card  treefield-card">
                                <div class="property-card-header image-box">
                                    <img src="img/placeholders/395x250.png" alt="" class="" />
                                    <a href="listing.html" class="property-card-hover">
                                        <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                        <img src="img/plus.png" alt="" class="center-icon" />
                                        <img src="img/icon-notice.png" alt="" class="right-icon" />
                                    </a>
                                </div>
                                <div class="property-card-box card-box card-block">
                                    <h3 class="property-card-title"><i class="fa fa-at color-primary"></i><a href="listing.html">Job</a></h3>
                                    <ul class="treefield-categories">
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_job.html">Administrative</a>
                                            <span class="count text-color-primary">42</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_job.html">Architecture</a>
                                            <span class="count text-color-primary">29</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_job.html">Bank</a>
                                            <span class="count text-color-primary">163</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_job.html">IT</a>
                                            <span class="count text-color-primary">251</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_job.html">Management</a>
                                            <span class="count text-color-primary">193</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="property-card card  treefield-card">
                                <div class="property-card-header image-box">
                                    <img src="img/placeholders/395x250.png" alt="" class="" />
                                    <a href="listing.html" class="property-card-hover">
                                        <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                        <img src="img/plus.png" alt="" class="center-icon" />
                                        <img src="img/icon-notice.png" alt="" class="right-icon" />
                                    </a>
                                </div>
                                <div class="property-card-box card-box card-block">
                                    <h3 class="property-card-title"><i class="fa fa-building-o color-primary"></i><a href="listing.html">Real Estate</a></h3>
                                    <ul class="treefield-categories">
                                        <li>
                                            <a class="treefield-box-item btn-default" href="map_side2.html">Apartment</a>
                                            <span class="count text-color-primary">42</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="map_side2.html">Land</a>
                                            <span class="count text-color-primary">95</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="map_side2.html">House</a>
                                            <span class="count text-color-primary">131</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="map_side2.html">Commercial</a>
                                            <span class="count text-color-primary">123</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="property-card card  treefield-card">
                                <div class="property-card-header image-box">
                                    <img src="img/placeholders/395x250.png" alt="" class="" />
                                    <a href="listing.html" class="property-card-hover">
                                        <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                        <img src="img/plus.png" alt="" class="center-icon" />
                                        <img src="img/icon-notice.png" alt="" class="right-icon" />
                                    </a>
                                </div>
                                <div class="property-card-box card-box card-block">
                                    <h3 class="property-card-title"><i class="fa fa-ship color-primary"></i><a href="listing.html">Yacht</a></h3>
                                    <ul class="treefield-categories">
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_yacht.html">Fisher</a>
                                            <span class="count text-color-primary">6</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_yacht.html">Motor</a>
                                            <span class="count text-color-primary">19</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_yacht.html">House</a>
                                            <span class="count text-color-primary">131</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_yacht.html">Sailing</a>
                                            <span class="count text-color-primary">3</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="property-card card  treefield-card">
                                <div class="property-card-header image-box">
                                    <img src="img/placeholders/395x250.png" alt="" class="" />
                                    <a href="listing.html" class="property-card-hover">
                                        <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                        <img src="img/plus.png" alt="" class="center-icon" />
                                        <img src="img/icon-notice.png" alt="" class="right-icon" />
                                    </a>
                                </div>
                                <div class="property-card-box card-box card-block">
                                    <h3 class="property-card-title"><i class="fa fa-paw color-primary"></i><a href="listing.html">Horses</a></h3>
                                    <ul class="treefield-categories">
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_shop.html">American Paint Horse</a>
                                            <span class="count text-color-primary">27</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_shop.html">Arabian horse</a>
                                            <span class="count text-color-primary">173</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_shop.html">Czech warm blood</a>
                                            <span class="count text-color-primary">543</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_shop.html">Croatian Coldblood</a>
                                            <span class="count text-color-primary">203</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="property-card card  treefield-card">
                                <div class="property-card-header image-box">
                                    <img src="img/placeholders/395x250.png" alt="" class="" />
                                    <a href="listing.html" class="property-card-hover">
                                        <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                        <img src="img/plus.png" alt="" class="center-icon" />
                                        <img src="img/icon-notice.png" alt="" class="right-icon" />
                                    </a>
                                </div>
                                <div class="property-card-box card-box card-block">
                                    <h3 class="property-card-title"><i class="fa fa-money color-primary"></i><a href="listing.html">Business Estate</a></h3>
                                    <ul class="treefield-categories">
                                        <li>
                                            <a class="treefield-box-item btn-default" href="map_business.html">Bar</a>
                                            <span class="count text-color-primary">57</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="map_business.html">Home food restaurant</a>
                                            <span class="count text-color-primary">23</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="map_business.html">Flower shop</a>
                                            <span class="count text-color-primary">44</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="map_business.html">Clothes shop</a>
                                            <span class="count text-color-primary">678</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="map_business.html">Luxar Hotel</a>
                                            <span class="count text-color-primary">457</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="property-card card  treefield-card">
                                <div class="property-card-header image-box">
                                    <img src="img/placeholders/395x250.png" alt="" class="" />
                                    <a href="listing.html" class="property-card-hover">
                                        <img src="img/property-hover-arrow.png" alt="" class="left-icon" />
                                        <img src="img/plus.png" alt="" class="center-icon" />
                                        <img src="img/icon-notice.png" alt="" class="right-icon" />
                                    </a>
                                </div>
                                <div class="property-card-box card-box card-block">
                                    <h3 class="property-card-title"><i class="fa fa-shopping-cart color-primary"></i><a href="listing.html">Shop</a></h3>
                                    <ul class="treefield-categories">
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_shop.html">Phones</a>
                                            <span class="count text-color-primary">6</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_shop.html">Tablet devices</a>
                                            <span class="count text-color-primary">19</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_shop.html">Food</a>
                                            <span class="count text-color-primary">131</span>
                                        </li>
                                        <li>
                                            <a class="treefield-box-item btn-default" href="index_shop.html">Clothes</a>
                                            <span class="count text-color-primary">3</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.properties -->
                    <nav class="text-center">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                </div> <!-- /.properties-->
            </div><!-- /.center-content -->
            <div class="col-md-3 sidebar-right">
                <!--                    <div class="widget text-center">-->
                <!--                        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>-->
                <!--                    </div>-->
                <!-- /.widget-facebook -->
                <div class="widget widget-box box-container">
                    <div class="widget-header text-uppercaser">
                        <h2>Фильтр</h2>
                    </div>
                    <div class="form-additional npad">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Цена от"  />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Цена до"  />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Город"  />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Площадь"  />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-wide color-primary" type='submit'>Найти</button>
                        </div>
                    </div>
                </div>
                <div class="widget widget-box box-container">
                    <div class="widget-header text-uppercaser">
                        <h3>Рекомендуем</h3>
                    </div>
                    <ul class="widget-list text-uppercase text-center npad">
                        <li><a href="#" class="widget-item">Платное размещение</a></li>
                        <li><a href="#" class="widget-item">Платное размещение</a></li>
                        <li><a href="#" class="widget-item">Платное размещение</a></li>
                    </ul>
                </div><!-- /.widget-filter-->
                <!--                    <div class="widget widget-ads-right">-->
                <!--                        <img src="img/placeholders/265x220.png" alt="" class="center-block" />-->
                <!--                    </div>-->
                <!-- /.widget-ads-->
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