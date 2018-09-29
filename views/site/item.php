<?php


use app\models\Product;
use app\models\SendMailForm;

/* @var $this yii\web\View */
/* @var $product Product */
/* @var $contactForm SendMailForm */


$this->title = 'Объявление. 1biz.kz - продажа готового бизнеса в Казахстане';
?>
<div class="top-box-mask"></div>
</header><!-- /.header-->
<main class="main section-color-primary">
    <div class="container">
        <section class="top-title">
            <ul class="breadcrumb">
                <li class="item"><a href="/"> Главная </a></li>
                <li class="item"><a href="/listing"> Объявления</a></li>
                <li class="item"> <?= $product->name ?> </li>
            </ul>
            <h1 class="h-side-title page-title page-title-big text-color-primary"><?= $product->name ?></h1>
        </section> <!-- /. content-header -->
        <div class="row">
            <div class="col-md-9">
                <div class="widget widget-box box-container widget-property">
                    <div class="property-slider-box">
                        <div id="property-slider" class="property-slider carousel slide" data-ride="carousel">
                            <!-- Content -->
                            <div class="carousel-inner" role="listbox">
                                <!-- Slide 1 -->
                                <div class="item active">
                                    <img src="<?= $product->img1 ?>" alt="<?= $product->name ?>"/>
                                </div>
                                <div class="item">
                                    <img src="<?= $product->img2 ?>" alt="<?= $product->name ?>"/>
                                </div>
                                <div class="item">
                                    <img src="<?= $product->img3 ?>" alt="<?= $product->name ?>"/>
                                </div>
                            </div>
                            <!-- Previous/Next controls -->
                            <a class="left carousel-control" href="#property-slider" role="button" data-slide="prev">
                                <span class="icon-prev" aria-hidden="true"></span>
                                <span class="sr-only">Прошлая</span>
                            </a>
                            <a class="right carousel-control" href="#property-slider" role="button" data-slide="next">
                                <span class="icon-next" aria-hidden="true"></span>
                                <span class="sr-only">Следующая</span>
                            </a>
                        </div>
                    </div>
                    <div class="widget-body">
                        <div class="widget-header widget-title text-uppercase">
                            <h2>Описание</h2>
                        </div>
                        <div class="widget-content wide-p">
                            <p class='clearfix'>
                                <!--                                <img src="assets/img/placeholders/450x300.png"  class="pull-right-img" alt="" />-->
                                <?= \yii\helpers\Html::encode($product->description) ?>
                            </p>
                        </div>
                    </div>
                </div> <!-- /. widget-body -->

                <div class="widget widget-box box-container widget-overview visible-sm visible-xs">
                    <div class="widget-header text-uppercase">
                        <h2>Параметры</h2>
                    </div>
                    <ul class="list-overview">
                        <li>
                            <span class="list-overview-option">Адрес</span>
                            <span class="list-overview-value"
                                  title="<?= $product->address ?>, <?= $product->city ?>"><?= $product->address ?>
                                , <?= $product->city ?></span>
                        </li>
                        <li>
                            <span class="list-overview-option">Категория: </span>
                            <span class="list-overview-value"><span
                                        class="label label-default label-tag-primary"><?= $product->category->name ?></span></span>
                        </li>
                        <li>
                            <span class="list-overview-option">Операция: </span>
                            <span class="list-overview-value"><?php if ($product->product_type == 'sell') {
                                                                    echo 'Продажа';
                                                                } else echo 'Покупка' ?></span>
                        </li>
                        <li>
                            <span class="list-overview-option">Cобственность: </span>
                            <span class="list-overview-value"><?= $product->law_type ?></span>
                        </li>
                        <li>
                            <span class="list-overview-option">Лиценизирование </span>
                            <span class="list-overview-value"><?php if ($product->licensed == 0) {
                                                                    echo '-';
                                                                } else echo 'Да' ?></span>
                        </li>
                        <li>
                            <span class="list-overview-option">Рейтинг</span>
                            <span class="list-overview-value">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </span>
                        </li>
                        <li>
                            <span class="list-overview-option">Цена без торгов: </span>
                            <span class="list-overview-value"><?= $product->price ?> тенге</span>
                        </li>
                        <li>
                            <span class="list-overview-option">Цена (торг):</span>
                            <span class="list-overview-value"><?= $product->price_trade ?> тенге</span>
                        </li>
                    </ul>
                </div><!-- /. widget-OVERVIEW -->


                <div class="widget widget-box box-container">
                    <div class="widget-header text-uppercase">
                        <h2>Фотогалерея</h2>
                    </div>
                    <ul data-target="#modal-gallery" data-toggle="modal-gallery" class="images-gallery clearfix">
                        <li class="col-sm-4">
                            <a data-gallery="gallery" href="<?= $product->img1 ?>" title=""
                               download="<?= $product->img1 ?>" class="preview show-icon">
                                <img src="assets/img/preview-icon.png" class="" alt=""/>
                            </a>
                            <div class="preview-img"><img src="<?= $product->img1 ?>"
                                                          data-src="<?= $product->img1 ?>" alt=""
                                                          class=""/></div>
                        </li>

                        <li class="col-sm-4">
                            <a data-gallery="gallery" href="<?= $product->img2 ?>" title=""
                               download="<?= $product->img2 ?>" class="preview show-icon">
                                <img src="assets/img/preview-icon.png" class="" alt=""/>
                            </a>
                            <div class="preview-img"><img src="<?= $product->img2 ?>"
                                                          data-src="<?= $product->img2 ?>" alt=""
                                                          class=""/></div>
                        </li>

                        <li class="col-sm-4">
                            <a data-gallery="gallery" href="<?= $product->img3 ?>" title=""
                               download="<?= $product->img3 ?>" class="preview show-icon">
                                <img src="assets/img/preview-icon.png" class="" alt=""/>
                            </a>
                            <div class="preview-img"><img src="<?= $product->img3 ?>"
                                                          data-src="<?= $product->img3 ?>" alt=""
                                                          class=""/></div>
                        </li>
                    </ul>
                </div><!-- /. widget-gallery -->
            </div><!-- /.center-content -->

            <div class="col-md-3">
                <div class="widget widget-box box-container widget-overview hidden-sm  hidden-xs">
                    <div class="widget-header text-uppercase">
                        <h2>Описание</h2>
                    </div>
                    <ul class="list-overview">
                        <li>
                            <span class="list-overview-option">Рейтинг</span>
                            <span class="list-overview-value">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </span>
                        </li>
                        <li class="custom-address">
                            <span class="list-overview-option">Адрес</span>
                            <span class="list-overview-value"
                                  title="<?= $product->address ?>, <?= $product->city ?>"><?= $product->address ?>
                                , <?= $product->city ?></span>
                        </li>
                        <li>
                            <span class="list-overview-option">Категория: </span>
                            <span class="list-overview-value"><span
                                        class="label label-default label-tag-primary"><?= $product->category->name ?></span></span>
                        </li>
                        <li>
                            <span class="list-overview-option">Операция: </span>
                            <span class="list-overview-value"><?php if ($product->product_type == 'sell') {
                                                                    echo 'Продажа';
                                                                } else echo 'Покупка' ?></span>
                        </li>
                        <li>
                            <span class="list-overview-option">Cобственность: </span>
                            <span class="list-overview-value"><?= $product->law_type ?></span>
                        </li>
                        <li>
                            <span class="list-overview-option">Лиценизирование </span>
                            <span class="list-overview-value"><?php if ($product->licensed == 0) {
                                                                    echo '-';
                                                                } else echo 'Да' ?></span>
                        </li>
                        <li>
                            <span class="list-overview-option">Активы: </span>
                            <span class="list-overview-value"><?= $product->price_active ?> тенге</span>
                        </li>
                        <li>
                            <span class="list-overview-option">Доходность: </span>
                            <span class="list-overview-value"><?= $product->price_profit ?> тенге</span>
                        </li>
                        <li>
                            <span class="list-overview-option">Цена без торгов: </span>
                            <span class="list-overview-value"><strong><?= $product->price ?> тенге</strong></span>
                        </li>
                        <li>
                            <span class="list-overview-option">Цена (торг):</span>
                            <span class="list-overview-value"><strong><?= $product->price_trade ?> тенге</strong></span>
                        </li>
                        <li>
                            <span class="list-overview-option"></span>
                            <span class="list-overview-value">
                                <form method="post">
                                <input type="submit" name='favorite_button' class="btn btn-info" value="В избранное"/>
                                </form>
                            </span>
                        </li>
                    </ul>
                    
                </div><!-- /. widget-OVERVIEW -->

                <!--                <div class="widget widget-box box-container widget-agent">-->
                <!--                    <div class="media">-->
                <!--                        <div class="agent-logo media-left media-middle">-->
                <!--                            <a href="profile.html" class="img-circle-cover">-->
                <!--                                <img src="assets/img/placeholders/90x90.png" alt="" class="img-circle"/>-->
                <!--                            </a>-->
                <!--                        </div>-->
                <!--                        <div class="agent-details media-right media-top">-->
                <!--                            <a href="profile.html" class="agent-name text-color-primary">Владелец объявления</a>-->
                <!--                            <span class="phone">+7 (495)92 12 321</span>-->
                <!--                            <a href="mailto:#" class="mail text-color-primary">Email скрыт</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->

                <div class="widget widget-form" id="form">
                    <div class="box-container widget-body">
                        <div class="widget-header text-uppercaser"><h2>Написать</h2></div>
                        <?php if (Yii::$app->user->isGuest) { ?>
                            <div class="form-additional">
                                <a href="/login">Авторизуйтесь</a>, чтобы написать
                                <br>&nbsp;
                            </div>
                        <?php 
                    } else { ?>
                            <?php $form = \yii\widgets\ActiveForm::begin([
                                'fieldConfig' => [
                                    'template' => "<div class='form-group'> {input} {error}</div>\n",
                                ],
                                'options' => ['class' => 'form-additional'],
                            ]); ?>
                            <?= $form->field($contactForm, 'name')->textInput(['placeholder' => 'Ваше имя']) ?>
                            <?= $form->field(
                                $contactForm,
                                'phone'
                            )->textInput(['placeholder' => 'Контактный телефон']) ?>
                            <?= $form->field($contactForm, 'email')->textInput(['placeholder' => 'Email']) ?>
                            <?= $form->field($contactForm, 'message')->textInput(['placeholder' => 'Сообщение']) ?>

                            <div class="form-group form-group-submit">
                                <input type="submit" name='address'
                                       class="btn btn-primary btn-wide color-primary btn-property"
                                       value="Отправить"/>
                            </div>
                            <?php \yii\widgets\ActiveForm::end(); ?>
                        <?php 
                    } ?>
                    </div>
                </div><!-- /.widget-form-->
            </div>
            <!-- /.right side bar -->
        </div>
    </div>
</main><!-- /.main-part-->
