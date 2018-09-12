<?php

namespace app\controllers;

use app\bus\commands\ChangePasswordCommand;
use app\bus\repositories\ProductsRepository;
use app\models\AddForm;
use dektrium\user\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class CabinetController extends Controller
{
    private $user;

    public function init()
    {
        if (isset(Yii::$app->user)) {
            $this->user = User::findIdentity(Yii::$app->user->id);
        }
        parent::init();
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'profile', 'products', 'favourite', 'add'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

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
        $errorMessage = '';
        try {
            # Change password setting
            if (Yii::$app->request->post('current_password')) {
                $command = new ChangePasswordCommand();
                $command->userId = $this->user->id;
                $command->currentPassword = Yii::$app->request->post('current_password');
                $command->newPassword = Yii::$app->request->post('new_password');
                $command->newPasswordRepeat = Yii::$app->request->post('new_password_repeat');

                Yii::$app->commandBus->handle($command);
                Yii::$app->session->setFlash('success', "Saved");
                $this->refresh();
            }
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
        }

        return $this->render('index', ['errorMessage' => $errorMessage]);
    }

    public function actionProducts()
    {
        $productsRepository = new ProductsRepository();
        $products = $productsRepository->findAllByUserId($this->user->id, true);

        return $this->render('products', ['products' => $products]);
    }

    public function actionAdd()
    {
        $form = new AddForm();

        return $this->render('add', ['form' => $form]);
    }

    public function actionFavourite()
    {
        return $this->render('favourite');
    }


}
