<?php

namespace app\controllers;

use app\bus\repositories\ProductsRepository;
use app\models\Category;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $productsRepo = new ProductsRepository();
        $latestProducts = $productsRepo->findAll();

        $categories = Category::find()->orderBy('name ASC')->all();
        $categories = ArrayHelper::map($categories, 'id', 'name');

        return $this->render('index', ['latestProducts' => $latestProducts, 'categories' => $categories]);
    }

    public function actionListing($category = 0, $from = 0, $to = 0, $law_type = '', $licensed = -1)
    {
        $productsRepo = new ProductsRepository();
        $latestProducts = $productsRepo->findAll(10, false, $category, $from, $to, $law_type, $licensed);

        $categories = Category::find()->orderBy('name ASC')->all();
        $categories = ArrayHelper::map($categories, 'id', 'name');


        return $this->render('listing', ['latestProducts' => $latestProducts, 'categories' => $categories]);
    }

    public function actionItem($id)
    {
        $productsRepo = new ProductsRepository();
        $product = $productsRepo->findOneById($id);

        if ($product == null) {
            throw new NotFoundHttpException('Product not found');
        }

        return $this->render('item', ['product' => $product]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}
