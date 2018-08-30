<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="libraries/font-awesome/css/font-awesome.min.css" />

    <!-- Start BOOTSTRAP -->
    <link rel="stylesheet" href="libraries/tether/dist/css/tether.min.css" />
    <link rel="stylesheet" href="libraries/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="libraries/bootstrap-colorpicker-master/dist/css/bootstrap-colorpicker.min.css" />
    <!-- End Bootstrap -->
    <!-- Start Template files -->
    <link rel="stylesheet" href="css/winter-flat.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <!-- End  Template files -->
    <!-- Start owl-carousel -->
    <link rel="stylesheet" href="libraries/owl.carousel/assets/owl.carousel.css" />
    <!-- End owl-carousel -->
    <!-- Start blueimp  -->
    <link rel="stylesheet" href="css/blueimp-gallery.min.css" />
    <!-- End blueimp  -->
    <script src="js/modernizr.custom.js"></script>
    <!-- Start custom template style  -->
    <link rel="stylesheet" href="css/custom_template_style.css" />
    <!-- End custom template style   -->
</head>
<?php $this->beginBody() ?>
<body class="">
<div id="fb-root"></div>
<div class="container container-wrapper">
    <header class="header">
        <div class="top-box" data-toggle="sticky-onscroll">
            <div class="container">
                <div  class="top-bar color-primary">
                    <div class="container clearfix">
                        <div class="pull-left">
                            <ul class="login-menu clearfix">
<!--                                <li><a href="mylistings.html"><i class="fa fa-list"></i> My listings</a></li>-->
<!--                                <li><a href="mylistings.html"><i class="fa fa-star"></i> My favorites</a></li>-->
<!--                                <li><a href="mylistings.html"><i class="fa fa-envelope"></i> My inquiries </a></li>-->
<!--                                <li><a href="mylistings.html"><i class="fa fa-user"></i> My profile</a></li>-->
<!--                                <li><a href="login.html"><i class="fa fa-power-off"></i> Login</a></li>-->
                            </ul>
                        </div>
                        <div class="pull-right">
                            <ul class="social-nav clearfix">
<!--                                <li><a href="https://www.facebook.com/share.php?u=http%3A%2F%2Ftest.com%2F" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Facebook</a></li>-->
<!--                                <li><a href="https://twitter.com/home?status=http://test.com" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Twitter</a></li>-->
<!--                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Linkid</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div><!-- /.top-bar-->
                <section class="header-inner">
                    <div class="container">
                        <div class="logo pull-left pull-sm-up col-sm-6 col-xs-12  text-left">
                            <a href="index.html">
                                <img src="img/logo.png" alt="" />
                                <img src="img/logo.png" alt="" class="mini-logo" />
                            </a>
                        </div>
<!--                        <div class="pull-right pull-sm-up col-sm-6 col-xs-12 websitetitle focus-color">-->
<!--                            <a href="login.html" class="row">-->
<!--                                <div class="sub-title">join us</div>-->
<!--                                <h2 class="title">Add your listing</h2>-->
<!--                            </a>-->
<!--                        </div>-->
                        <div class="pull-left menu">
                            <div class="box-navigaion clearfix">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="lang-manu dropdown pull-right">
<!--                                    <button class="btn btn-secondary" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                                        <img src="img/placeholders/flag.png" alt="" /> <span>EN</span>-->
<!--                                        <i class='icon-dropdown'></i>-->
<!--                                    </button>-->
<!--                                    <div class="dropdown-menu" aria-labelledby="about-us">-->
<!--                                        <a class="dropdown-item" href="#">-->
<!--                                            <img src="img/placeholders/flag.png" alt="" /> EN-->
<!--                                        </a>-->
<!--                                        <a class="dropdown-item" href="#">-->
<!--                                            <img src="img/placeholders/flag.png" alt="" /> HR-->
<!--                                        </a>-->
<!--                                    </div>-->
                                </div>
                            </div>
                            <nav class="navbar text-color-primary">
                                <div class="text-right">
                                    <button class="navbar-toggler hidden" type="button" data-toggle="collapse" data-target="#main-menu">
                                        &#9776;
                                    </button>
                                </div>
                                <!-- Links -->
                                <div class="collapse navbar-collapse" id="main-menu">
                                    <ul class="nav navbar-nav clearfix">
<!--                                        <li class="nav-item dropdown">-->
<!--                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                                                Slider-->
<!--                                                <i class="icon-dropdown"></i>-->
<!--                                            </a>-->
<!--                                            <div class="dropdown-menu">-->
<!--                                                <a class="dropdown-item" href="slider_standard.html">Standard</a>-->
<!--                                                <a class="dropdown-item" href="index_headervideo.html">Video</a>-->
<!--                                                <a class="dropdown-item" href="index_fullscreenslider.html">Full Screen</a>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li class="nav-item dropdown">-->
<!--                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                                                Map-->
<!--                                                <i class="icon-dropdown"></i>-->
<!--                                            </a>-->
<!--                                            <div class="dropdown-menu">-->
<!--                                                <a class="dropdown-item" href="map.html">Grid results</a>-->
<!--                                                <a class="dropdown-item" href="map_list.html">List result</a>-->
<!--                                                <a class="dropdown-item" href="map_side.html">Side version</a>-->
<!--                                                <a class="dropdown-item" href="map_side_list.html">Side version list</a>-->
<!--                                                <a class="dropdown-item" href="map_geo.html?geolocation=paris">Geo regions</a>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li class="nav-item dropdown">-->
<!--                                            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                                                Categories-->
<!--                                                <i class="icon-dropdown"></i>-->
<!--                                            </a>-->
<!--                                            <div class="dropdown-menu">-->
<!--                                                <a class="dropdown-item" href="map_side.html">Real Estate</a>-->
<!--                                                <a class="dropdown-item" href="index_yacht.html">Yacht Market</a>-->
<!--                                                <a class="dropdown-item" href="index_car.html">Car Dealer</a>-->
<!--                                                <a class="dropdown-item" href="index_job.html">Job Finder</a>-->
<!--                                                <a class="dropdown-item" href="map_business.html">Business Directory</a>-->
<!--                                                <a class="dropdown-item active" href="index_classfied.html">Classified Portal</a>-->
<!--                                                <a class="dropdown-item" href="index_shop.html">Basic shop</a>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li class="nav-item dropdown dropdown-mega">-->
<!--                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                                                Featured-->
<!--                                                <i class="icon-dropdown"></i>-->
<!--                                            </a>-->
<!--                                            <div class="dropdown-menu dropdown-menu-property">-->
<!--                                                <div class="container">-->
<!--                                                    <div class="row">-->
<!--                                                        <div class="col-md-3">-->
<!--                                                            <div class="property-card card">-->
<!--                                                                <div class="property-card-header image-box">-->
<!--                                                                    <img src="img/placeholders/395x250.png" alt="" class="" />-->
<!--                                                                    <a href="listing.html" class="property-card-hover">-->
<!--                                                                        <img src="img/property-hover-arrow.png" alt="" class="left-icon" />-->
<!--                                                                        <img src="img/plus.png" alt="" class="center-icon" />-->
<!--                                                                        <img src="img/icon-notice.png" alt="" class="right-icon" />-->
<!--                                                                    </a>-->
<!--                                                                </div>-->
<!--                                                                <div class="property-card-tags">-->
<!--                                                                    <span class="label label-default label-tag-primary">sale</span>-->
<!--                                                                </div>-->
<!--                                                                <div class="property-card-box card-box card-block">-->
<!--                                                                    <h3 class="property-card-title"><a href="listing.html">Real estate</a></h3>-->
<!--                                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>-->
<!--                                                                    <div class="property-preview-footer  clearfix">-->
<!--                                                                        <div class="property-preview-f-left text-color-primary">-->
<!--                                                                                    <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-home"></i>House-->
<!--                                                                                    </span>-->
<!--                                                                            <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-tint"></i>1-->
<!--                                                                                    </span>-->
<!--                                                                            <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-square-o"></i>200m-->
<!--                                                                                    </span>-->
<!--                                                                            <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-eur"></i>60 000-->
<!--                                                                                    </span>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="col-md-3">-->
<!--                                                            <div class="property-card card">-->
<!--                                                                <div class="property-card-header image-box">-->
<!--                                                                    <img src="img/placeholders/395x250.png" alt="" class="" />-->
<!--                                                                    <a href="listing.html" class="property-card-hover">-->
<!--                                                                        <img src="img/property-hover-arrow.png" alt="" class="left-icon" />-->
<!--                                                                        <img src="img/plus.png" alt="" class="center-icon" />-->
<!--                                                                        <img src="img/icon-notice.png" alt="" class="right-icon" />-->
<!--                                                                    </a>-->
<!--                                                                </div>-->
<!--                                                                <div class="property-card-tags">-->
<!--                                                                    <span class="label label-default label-tag-primary">sale</span>-->
<!--                                                                </div>-->
<!--                                                                <div class="property-card-box card-box card-block">-->
<!--                                                                    <h3 class="property-card-title"><a href="listing.html">Coffee bar</a></h3>-->
<!--                                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>-->
<!--                                                                    <div class="property-preview-footer  clearfix">-->
<!--                                                                        <div class="property-preview-f-left text-color-primary">-->
<!--                                                                                    <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-home"></i>House-->
<!--                                                                                    </span>-->
<!--                                                                            <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-tint"></i>1-->
<!--                                                                                    </span>-->
<!--                                                                            <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-square-o"></i>200m-->
<!--                                                                                    </span>-->
<!--                                                                            <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-eur"></i>60 000-->
<!--                                                                                    </span>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="col-md-3">-->
<!--                                                            <div class="property-card card">-->
<!--                                                                <div class="property-card-header image-box">-->
<!--                                                                    <img src="img/placeholders/395x250.png" alt="" class="" />-->
<!--                                                                    <a href="listing.html" class="property-card-hover">-->
<!--                                                                        <img src="img/property-hover-arrow.png" alt="" class="left-icon" />-->
<!--                                                                        <img src="img/plus.png" alt="" class="center-icon" />-->
<!--                                                                        <img src="img/icon-notice.png" alt="" class="right-icon" />-->
<!--                                                                    </a>-->
<!--                                                                </div>-->
<!--                                                                <div class="property-card-tags">-->
<!--                                                                    <span class="label label-default label-tag-primary">sale</span>-->
<!--                                                                </div>-->
<!--                                                                <div class="property-card-box card-box card-block">-->
<!--                                                                    <h3 class="property-card-title"><a href="listing.html">Backyard pool</a></h3>-->
<!--                                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>-->
<!--                                                                    <div class="property-preview-footer  clearfix">-->
<!--                                                                        <div class="property-preview-f-left text-color-primary">-->
<!--                                                                                    <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-home"></i>House-->
<!--                                                                                    </span>-->
<!--                                                                            <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-tint"></i>1-->
<!--                                                                                    </span>-->
<!--                                                                            <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-square-o"></i>200m-->
<!--                                                                                    </span>-->
<!--                                                                            <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-eur"></i>60 000-->
<!--                                                                                    </span>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="col-md-3">-->
<!--                                                            <div class="property-card card">-->
<!--                                                                <div class="property-card-header image-box">-->
<!--                                                                    <img src="img/placeholders/395x250.png" alt="" class="" />-->
<!--                                                                    <a href="listing.html" class="property-card-hover">-->
<!--                                                                        <img src="img/property-hover-arrow.png" alt="" class="left-icon" />-->
<!--                                                                        <img src="img/plus.png" alt="" class="center-icon" />-->
<!--                                                                        <img src="img/icon-notice.png" alt="" class="right-icon" />-->
<!--                                                                    </a>-->
<!--                                                                </div>-->
<!--                                                                <div class="property-card-tags">-->
<!--                                                                    <span class="label label-default label-tag-warning">rent</span>-->
<!--                                                                </div>-->
<!--                                                                <div class="property-card-box card-box card-block">-->
<!--                                                                    <h3 class="property-card-title"><a href="listing.html">Pool couple</a></h3>-->
<!--                                                                    <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>-->
<!--                                                                    <div class="property-preview-footer  clearfix">-->
<!--                                                                        <div class="property-preview-f-left text-color-primary">-->
<!--                                                                                    <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-home"></i>House-->
<!--                                                                                    </span>-->
<!--                                                                            <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-tint"></i>1-->
<!--                                                                                    </span>-->
<!--                                                                            <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-square-o"></i>200m-->
<!--                                                                                    </span>-->
<!--                                                                            <span class="property-card-value">-->
<!--                                                                                        <i class="fa fa-eur"></i>60 000-->
<!--                                                                                    </span>-->
<!--                                                                        </div>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
                                        <li class="nav-item">
                                            <a class="nav-item" href="#">Главная</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-item" href="#">Объекты</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-item" href="#">Добавить объект</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-item" href="#">Контакты</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-item" href="#">Мой профиль</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-item" href="#">Регистрация / Авторизация</a>
                                        </li>
<!--                                        <li class="nav-item dropdown">-->
<!--                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                                                Pages-->
<!--                                                <i class="icon-dropdown"></i>-->
<!--                                            </a>-->
<!--                                            <div class="dropdown-menu">-->
<!--                                                <a class="dropdown-item" href="page_gallery.html">Basic with Gallery</a>-->
<!--                                                <a class="dropdown-item" href="login.html">Login</a>-->
<!--                                                <a class="dropdown-item" href="mylistings.html">My Listings</a>-->
<!--                                                <a class="dropdown-item" href="listing.html">Listing Preview</a>-->
<!--                                                <a class="dropdown-item" href="ask_expert.html">FAQ</a>-->
<!--                                                <a class="dropdown-item" href="agents.html">Agents</a>-->
<!--                                                <a class="dropdown-item" href="profile.html">Agent Profile</a>-->
<!--                                                <a class="dropdown-item" href="blog.html">Blog List</a>-->
<!--                                                <a class="dropdown-item" href="page_cart.html">Cart</a>-->
<!--                                                <a class="dropdown-item" href="component_alerts.html">Components</a>-->
<!--                                                <a class="dropdown-item" href="page_invoice.html">Invoice</a>-->
<!--                                                <a class="dropdown-item" href="contact.html">Contact</a>-->
<!--                                            </div>-->
<!--                                        </li>-->
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </section><!-- /.menu-->
            </div>
        </div>
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
                        <!-- Slide 2 -->
<!--                        <div class="item">-->
<!--                            <img src="img/placeholders/1600x550.png" alt="Rob Roy Glacier" />-->
<!--                            <div class="carousel-caption">-->
<!--                                <h3 class="carousel-caption-title"><span>Single Property real estate</span><i class="line-bottom color-primary"></i></h3>-->
<!--                                <div class="s-description"><p>This is simply dummy text of the printing and the typesetting industry. That has been the industry standard dummy text ever since the 1500s ...</p></div>-->
<!--                                <a href="listing.html" class="btn btn-primary color-primary"><span>Click to show</span></a>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- Slide 3 -->
<!--                        <div class="item">-->
<!--                            <img src="img/placeholders/1600x550.png" alt="Longtail boats at Phi Phi" />-->
<!--                            <div class="carousel-caption">-->
<!--                                <h3 class="carousel-caption-title"><span>Single Property real estate</span> <i class="line-bottom color-primary"></i></h3>-->
<!--                                <div class="s-description"><p>This is simply dummy text of the printing and the typesetting industry. That has been the industry standard dummy text ever since the 1500s ...</p></div>-->
<!--                                <a href="listing.html" class="btn btn-primary color-primary"><span>Click to show</span></a>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                    <!-- Previous/Next controls -->
                    <a class="left carousel-control" href="#header-slider" role="button" data-slide="prev">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#header-slider" role="button" data-slide="next">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
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
<!--                            <div class="grid-type pull-right">-->
<!--                                <a href="index_classfied.html" class="grid active"><i class="fa fa-th"></i></a>-->
<!--                                <a href="#" class="list"><i class="fa fa-list"></i></a>-->
<!--                            </div>-->
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
<!--    <section class="section section-ads section-parallax">-->
<!--        <h3 class="hidden">Ads</h3>-->
<!--        <div class="container">-->
<!--            <img src="img/placeholders/730x90.png" alt="" class="center-block" />-->
<!--        </div>-->
<!--    </section>-->
    <!-- /. horizontal-ads-->
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

<!--    <section class="section page-body section-color-primary">-->
<!--        <div class="container">-->
<!--            <h2 class="section-title text-center"><span>Example Features</span></h2>-->
<!--            <div class="row">-->
<!--                <div class="col-md-4 col-sm-6">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3 content-image"><img src="img/placeholders/110x100.png" alt="" /></div>-->
<!--                        <div class="col-md-9">-->
<!--                            <h4 class="text-color-primary">Native Multilangual</h4> Natively multilingual, no need to install any addon. Every element can be translated and you can add as many languages as you want.-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3 content-image"><img src="img/placeholders/110x100.png" alt="" /></div>-->
<!--                        <div class="col-md-9">-->
<!--                            <h4 class="text-color-primary">Easy to customize</h4> Template is based on Bootstrap 3, if you are familiar with Bootstrap you can easily customize this template.-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3 content-image"><img src="img/placeholders/110x100.png" alt="" /></div>-->
<!--                        <div class="col-md-9">-->
<!--                            <h4 class="text-color-primary">Bootstrap ready</h4> Based on Bootstrap 3 and are easy to customize.-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3 content-image"><img src="img/placeholders/110x100.png" alt="" /></div>-->
<!--                        <div class="col-md-9">-->
<!--                            <h4 class="text-color-primary">User friendly</h4> Website structure is logical. Managing elements such as pages, estates or images is easily done...-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3 content-image"><img src="img/placeholders/110x100.png" alt="" /></div>-->
<!--                        <div class="col-md-9">-->
<!--                            <h4 class="text-color-primary">Template System</h4> This is simply dummy text of the printing and typesetting industry.elit...-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3 content-image"><img src="img/placeholders/110x100.png" alt="" /></div>-->
<!--                        <div class="col-md-9">-->
<!--                            <h4 class="text-color-primary">Robust</h4> Build as easy to use and robust Flat style user interface.-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!-- /.page-body -->
<!--    <section class="section agencies">-->
<!--        <div class="container">-->
<!--            <h2 class="section-title text-center"><span>Agencies</span></h2>-->
<!--            <div class="row-fluid clearfix">-->
<!--                <div class="col-md-12 col-md-offset-0 owl-corousel-box agencies-corousel">-->
<!--                    <div class="owl-carousel">-->
<!--                        <div class="item">-->
<!--                            <a href="profile.html"><img src="img/placeholders/300x60.png" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <a href="profile.html"><img src="img/placeholders/300x60.png" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <a href="profile.html"><img src="img/placeholders/300x60.png" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <a href="profile.html"><img src="img/placeholders/300x60.png" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <a href="profile.html"><img src="img/placeholders/300x60.png" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <a href="profile.html"><img src="img/placeholders/300x60.png" alt="" /></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <a href="#" class="owl-btn customPrevBtn"></a>-->
<!--                    <a href="#" class="owl-btn customNextBtn"></a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <footer class="footer">
        <div class="container footer-mask">
            <div class="container footer-contant">
                <div class="row">
                    <div class="col-md-3 hidden-sm hidden-xs">
<!--                        <div class="logo"><a href="#"><img src="img/placeholders/360x85.png" alt="" /></a></div>-->
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="title">
                            <h4>Контакты</h4>
                        </div>
                        <ul class="list list-contact  list-news">
                            <li>Казахстан,
                                3 улица строителей,
                                1029 Алматы</li>
                            <li><i class="fa fa-phone"></i> +385 (0)1 123 321</li>
                            <li><i class="fa fa-phone"></i>  +385 (0)1 123 322</li>
                            <li><i class="fa fa-envelope"></i>  info@1biz.kz</li>
                        </ul>
                    </div>

                </div>
            </div><!-- /.footer-content -->
            <div class="footer-bottom">
                <div class="container text-right">
                    <span class=""><a href="#">Powered by Sassoft &#169; 2018</a></span>
                </div>
            </div><!-- /.footer-bottom -->
        </div>
    </footer>
    <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
</div>
<!-- Start Jquery -->
<script src="js/jquery-2.2.1.min.js"></script>
<script src="libraries/jquery.mobile/jquery.mobile.custom.min.js"></script>
<!-- End Jquery -->
<!-- Start BOOTSTRAP -->
<script src="libraries/tether/dist/js/tether.min.js"></script>
<script src="libraries/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="libraries/bootstrap-colorpicker-master/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- End Bootstrap -->
<!-- Start owl-carousel -->
<script src="libraries/owl.carousel/owl.carousel.min.js"></script>
<!-- End owl-carousel -->
<!-- Start blueimp  -->
<script src="js/blueimp-gallery.min.js" type="text/javascript"></script>
<!-- End blueimp  -->
<!-- Start custom template style  -->
<script src="js/custom_template_style.js" type="text/javascript"></script>
<!-- End custom template style   -->
<script src="js/facebook.js" type="text/javascript"></script>
<!-- Start Template files -->
<script src="js/winter-flat.js"></script>
<!-- End  Template files -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>