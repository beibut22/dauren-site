<?php

/* @var $this yii\web\View */

$this->title = 'Мои объекты. 1biz.kz - продажа готового бизнеса в Казахстане';
?>
<main class="main section-color-primary">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <section class="top-title">
                    <ul class="breadcrumb">
                        <li class="item"><a href="/"> Главная </a></li>
                        <li class="item"> Мои объекты </li>
                    </ul>
                    <h1 class="h-side-title page-title page-title-big text-color-primary">Мои объекты</h1>
                </section> <!-- /. content-header -->
                <div class="widget widget-box box-container widget-mylistings">
                    <div class="">
                        <table class="table table-striped footable-sort" data-sorting="true">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Address</th>
                                <!-- Dynamic generated -->
                                <th data-breakpoints="xs sm md"  data-type="html">Listing name</th>
                                <th data-breakpoints="xs sm md"  data-type="html">Purpose</th>
                                <th data-breakpoints="xs sm md"  data-type="html">Type</th>
                                <th data-breakpoints="xs sm md"  data-type="html">City</th>
                                <!-- End dynamic generated -->
                                <th data-breakpoints="xs md" ></th>
                                <th data-hide="phone" class="control"  data-type="html">Edit</th>
                                <th data-breakpoints="xs md" class="control"  data-type="html">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>29</td>
                                <td>
                                    <a href="#">Veliki lovrečan</a>
                                </td>
                                <!-- Dynamic generated -->
                                <td>My listing</td>
                                <td>Sale</td>
                                <td>Land</td>
                                <td>Cestica</td>
                                <!-- End dynamic generated -->
                                <td>
                                    <a class="btn btn-primary" href="#">
                                        <i class="icon-circle-arrow-up"></i> Make featured</a>
                                </td>
                                <td><a href="#" class="btn btn-info"><i class="icon-edit"></i> Edit</a></td>
                                <td><a href="#" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="icon-remove"></i> Delete</a></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="box-body">
                            * Listing activation price: 5 USD<br />
                            * Listing featured price: 10 USD
                        </div>
                    </div>
                </div> <!-- /. widget-table-->
            </div><!-- /.center-content -->
        </div>
    </div>
</main><!-- /.main-part-->
