<?php

namespace app\controllers;

use app\bus\commands\AddProductCommand;
use app\bus\commands\ChangePasswordCommand;
use app\bus\commands\EditProductCommand;
use app\bus\repositories\ProductsRepository;
use app\models\AddForm;
use app\models\Category;
use app\models\EditForm;
use dektrium\user\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\bus\repositories\FavoritesRepository;
use app\bus\commands\UploadFileCommand;
use yii\web\UploadedFile;

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
                        'actions' => ['index', 'profile', 'products', 'favorite', 'add', 'product'],
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

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {

            $command = new AddProductCommand();

            $uploadCommand = new UploadFileCommand();
            $uploadCommand->imageFile = UploadedFile::getInstance($form, 'imgFile1');
            $uploadCommand->fileName = sha1($uploadCommand->imageFile->baseName . time()) . '.' . $uploadCommand->imageFile->extension;
            $uploadCommand->uploadStrategy = getenv('STORAGE_STRATEGY');
            $uploadCommand->uploadBucket = getenv('STORAGE_BUCKET');
            $command->img1 = getenv('STORAGE_PUBLIC_URL') . "/" . $uploadCommand->fileName;
            Yii::$app->commandBus->handle($uploadCommand);

            $uploadCommand = new UploadFileCommand();
            $uploadCommand->imageFile = UploadedFile::getInstance($form, 'imgFile2');

            if ($uploadCommand->imageFile) {
                sleep(1);
                $uploadCommand->fileName = sha1($uploadCommand->imageFile->baseName . time()) . '.' . $uploadCommand->imageFile->extension;
                $uploadCommand->uploadStrategy = getenv('STORAGE_STRATEGY');
                $uploadCommand->uploadBucket = getenv('STORAGE_BUCKET');
                $command->img2 = getenv('STORAGE_PUBLIC_URL') . "/" . $uploadCommand->fileName;
                Yii::$app->commandBus->handle($uploadCommand);
            }

            $uploadCommand = new UploadFileCommand();
            $uploadCommand->imageFile = UploadedFile::getInstance($form, 'imgFile3');

            if ($uploadCommand->imageFile) {
                sleep(1);
                $uploadCommand->fileName = sha1($uploadCommand->imageFile->baseName . time()) . '.' . $uploadCommand->imageFile->extension;
                $uploadCommand->uploadStrategy = getenv('STORAGE_STRATEGY');
                $uploadCommand->uploadBucket = getenv('STORAGE_BUCKET');
                $command->img3 = getenv('STORAGE_PUBLIC_URL') . "/" . $uploadCommand->fileName;
                Yii::$app->commandBus->handle($uploadCommand);
            }

            $command->userId = $this->user->id;
            $command->address = $form->address;
            $command->categoryId = $form->categoryId;
            $command->city = $form->city;
            $command->country = $form->country;
            $command->description = $form->description;
            $command->lawType = $form->lawType;
            $command->licensed = $form->licensed;
            $command->name = $form->name;
            $command->perspectives = $form->perspectives;
            $command->price = $form->price;
            $command->priceActive = $form->priceActive;
            $command->priceProfit = $form->priceProfit;
            $command->priceTrade = $form->priceTrade;
            $command->productType = $form->productType;
            $command->zip = $form->zip;

            Yii::$app->commandBus->handle($command);
            Yii::$app->session->setFlash('success', "Добавлено");
            $this->redirect('/cabinet/products');

        }

        $categories = Category::find()->orderBy('name ASC')->all();
        $categories = ArrayHelper::map($categories, 'id', 'name');

        return $this->render('add', ['addForm' => $form, 'categories' => $categories]);
    }

    public function actionProduct($id)
    {
        $productsRepo = new ProductsRepository();
        $product = $productsRepo->findOneByIdAndUserId($id, $this->user->id);

        if ($product == null) {
            throw new NotFoundHttpException('Объявление не найдено');
        }

        $editForm = new EditForm();

        if ($editForm->load(Yii::$app->request->post()) && $editForm->validate()) {
            $command = new EditProductCommand();
            $command->productId = $product->id;
            $command->userId = $this->user->id;
            $command->address = $editForm->address;
            $command->categoryId = $editForm->categoryId;
            $command->city = $editForm->city;
            $command->country = $editForm->country;
            $command->description = $editForm->description;
            $command->lawType = $editForm->lawType;
            $command->licensed = $editForm->licensed;
            $command->name = $editForm->name;
            $command->perspectives = $editForm->perspectives;
            $command->price = $editForm->price;
            $command->priceActive = $editForm->priceActive;
            $command->priceProfit = $editForm->priceProfit;
            $command->priceTrade = $editForm->priceTrade;
            $command->productType = $editForm->productType;
            $command->zip = $editForm->zip;

            Yii::$app->commandBus->handle($command);
            Yii::$app->session->setFlash('success', "Добавлено");
            $this->redirect('/cabinet/product/' . $product->id);
        }

        $editForm->address = $product->address;
        $editForm->categoryId = $product->fk_category;
        $editForm->city = $product->city;
        $editForm->country = $product->country;
        $editForm->description = $product->description;
        $editForm->lawType = $product->law_type;
        $editForm->licensed = $product->licensed;
        $editForm->name = $product->name;
        $editForm->perspectives = $product->perspectives;
        $editForm->price = $product->price;
        $editForm->priceActive = $product->price_active;
        $editForm->priceProfit = $product->price_profit;
        $editForm->priceTrade = $product->price_trade;
        $editForm->productType = $product->product_type;
        $editForm->zip = $product->zip;

        $categories = Category::find()->orderBy('name ASC')->all();
        $categories = ArrayHelper::map($categories, 'id', 'name');


        return $this->render('product', ['editForm' => $editForm, 'categories' => $categories]);
    }

    public function actionFavorite()
    {
        $favortiesRepository = new FavoritesRepository();
        $favorites = $favortiesRepository->findAllByUserId($this->user->id, true);

        $categories = Category::find()->orderBy('name ASC')->all();
        $categories = ArrayHelper::map($categories, 'id', 'name');

        return $this->render('favorite', ['favorites' => $favorites, 'categories' => $categories]);
    }
}
