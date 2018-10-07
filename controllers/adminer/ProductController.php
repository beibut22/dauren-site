<?php

namespace app\controllers\adminer;


use app\models\Category;
use app\models\Product;
use app\models\search\ProductSearch;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;


class ProductController extends MainController
{

    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', ['searchModel' => $searchModel, 'dataProvider' => $dataProvider]);
    }

    public function actionCreate()
    {
        $model = new Product();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            $categories = Category::find()->orderBy('name ASC')->all();
            $categories = ArrayHelper::map($categories, 'id', 'name');

            return $this->render('create', ['model' => $model, 'categories' => $categories]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->save();

            return $this->redirect(['index']);
        } else {
            $categories = Category::find()->orderBy('name ASC')->all();
            $categories = ArrayHelper::map($categories, 'id', 'name');

            return $this->render('update', ['model' => $model, 'categories' => $categories]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
}
