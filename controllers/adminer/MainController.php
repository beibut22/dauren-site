<?php

namespace app\controllers\adminer;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class MainController extends Controller
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'create', 'update', 'delete', 'view', 'saveall', 'deleteall', 'payment'],
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return (Yii::$app->user->identity->username == "admin" || Yii::$app->user->identity->username == "Sassoft");
                        },
                    ],
                ],
            ],
        ];
    }

    public function init()
    {
        $this->layout = "@app/views/layouts/admin";
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
