<?php

namespace app\controllers;

use app\bus\commands\AddFavoriteCommand;
use app\bus\commands\RemoveFavoriteCommand;
use app\bus\commands\SendEmailCommand;
use app\bus\repositories\FavoritesRepository;
use app\bus\repositories\ProductsRepository;
use app\models\Category;
use app\models\SendMailForm;
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
        $latestProducts = $productsRepo->findAll(-1, true, $category, $from, $to, $law_type, $licensed);

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

        $favoritesRepo = new FavoritesRepository();
        $favorite = $favoritesRepo->findOneByProductIdAndUserId($product->id, Yii::$app->user->id);
        $inFavorite = false;
        if ($favorite) {
            $inFavorite = true;
        }

        // Add to favorite block
        if (Yii::$app->request->post('favorite_added')) {
            $command = new AddFavoriteCommand();
            $command->userId = Yii::$app->user->id;
            $command->productId = $product->id;

            Yii::$app->commandBus->handle($command);
            Yii::$app->session->setFlash('success', "Добавлено в избранное");

            return $this->redirect(\Yii::$app->request->getReferrer());
        }

        // Remove from favorite block
        if (Yii::$app->request->post('favorite_removed')) {
            $command = new RemoveFavoriteCommand();
            $command->userId = Yii::$app->user->id;
            $command->productId = $product->id;

            Yii::$app->commandBus->handle($command);
            Yii::$app->session->setFlash('success', "Удалено из избранного");
            $this->refresh();
        }

        $contactForm = new SendMailForm();
        // Send mail to owner block
        if ($contactForm->load(Yii::$app->request->post()) && $contactForm->validate()) {
            $command = new SendEmailCommand();
            $command->name = 'Team 1biz';
            $command->email = 'noreply@1biz.kz';
            $command->emailTo = $product->user->email;
            $command->subject = 'Запрос по объявлению '.$product->name.' на 1biz.kz';
            $command->phone = $contactForm->phone;
            // Send message
            $command->message = 'Приветствую, \r\nвам поступило новое сообщение по объявлению '.$product->name.' от гостя: ';
            $command->message .= $contactForm->name.'\r\nТелефон: '.$contactForm->phone.' \r\n Email: '.$contactForm->email.'\r\n';
            $command->message .= 'Сообщение:\r\n'.$contactForm->message;

            $command->htmlMessage = 'Приветствую, <br>вам поступило новое сообщение по объявлению '.$product->name.' от гостя: ';
            $command->htmlMessage .= $contactForm->name.'<br>Телефон: '.$contactForm->phone.' <br> Email: '.$contactForm->email.'<br>';
            $command->htmlMessage .= 'Сообщение:<br>'.$contactForm->message;

            Yii::$app->commandBus->handle($command);
            Yii::$app->session->setFlash('success', "Сообщение успешно отправлено автору объявления");
            return $this->redirect(\Yii::$app->request->getReferrer());
        }

        return $this->render('item',
            ['product' => $product, 'contactForm' => $contactForm, 'inFavorite' => $inFavorite]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}
