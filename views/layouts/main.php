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
                                <?php if (!Yii::$app->user->isGuest) { ?>
                                    <li><a href="#"><i class="fa fa-user"></i> Мой профиль</a></li>
                                    <li><a href="#"><i class="fa fa-list"></i> Мои объекты</a></li>
                                    <li><a href="#"><i class="fa fa-star"></i> Избранное</a></li>
                                    <li><a href="/logout"><i class="fa fa-power-off"></i> Выйти</a></li>
                                <?php } else { ?>
                                    <li><a href="/login"><i class="fa fa-power-off"></i> Авторизация</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.top-bar-->
                <section class="header-inner">
                    <div class="container">
                        <div class="logo pull-left pull-sm-up col-sm-6 col-xs-12  text-left">
                            <a href="/">
                                <img src="img/logo.png" alt="" />
                                <img src="img/logo.png" alt="" class="mini-logo" />
                            </a>
                        </div>

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
                                        <li class="nav-item">
                                            <a class="nav-item" href="#"><strong>Главная</strong></a>
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
<!--                                        <li class="nav-item">-->
<!--                                            <a class="nav-item" href="#">Мой профиль</a>-->
<!--                                        </li>-->
                                        <li class="nav-item">
                                            <?php if (Yii::$app->user->isGuest) { ?>
                                                <a class="nav-item" href="/login">Регистрация / Авторизация</a>
                                            <?php } else { ?>
                                                <a class="nav-item" href="/">Профиль</a>
                                            <?php }?>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </section><!-- /.menu-->
            </div>
        </div>
    <?= $content ?>
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