<?php

namespace app\bus\repositories;

use app\models\Product;
use yii\data\ActiveDataProvider;

class ProductsRepository
{
    /**
     * @param Product $product
     * @return bool
     */
    public function save($product)
    {
        return $product->save();
    }

    /**
     * @param $id
     * @return null|Product
     */
    public function findOneById($id)
    {
        return Product::findOne(['id' => $id]);
    }

    /**
     * @param bool $useDataProvider
     * @return array|ActiveDataProvider|\yii\db\ActiveRecord[]
     */
    public function findAll($useDataProvider = false)
    {
        $data = Product::find();

        if ($useDataProvider) {
            $provider = new ActiveDataProvider([
                'query' => $data,
                'pagination' => [
                    'pageSize' => 25,
                ],
                'sort' => [
                    'defaultOrder' => [
                        'id' => SORT_DESC,
                    ],
                ],
            ]);

            return $provider;
        }

        return $data->all();
    }

    public function findAllByUserId($userId, $useDataProvider = false)
    {
        $data = Product::find()->where(['fk_user' => $userId]);

        if ($useDataProvider) {
            $provider = new ActiveDataProvider([
                'query' => $data,
                'pagination' => [
                    'pageSize' => 25,
                ],
                'sort' => [
                    'defaultOrder' => [
                        'id' => SORT_DESC,
                    ],
                ],
            ]);

            return $provider;
        }

        return $data->all();
    }

}