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

    public function findOneByIdAndUserId($id, $userId)
    {
        return Product::findOne(['id' => $id, 'fk_user' => $userId]);
    }

    /**
     * @param int $limit
     * @param bool $useDataProvider
     * @return array|ActiveDataProvider|\yii\db\ActiveRecord[]
     */
    public function findAll($limit = 10, $useDataProvider = false)
    {
        $data = Product::find()->limit($limit)->orderBy('id DESC');

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