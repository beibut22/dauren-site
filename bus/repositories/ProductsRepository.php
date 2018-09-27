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
     * @param int $byCategory
     * @param int $priceFrom
     * @param int $priceTo
     * @param string $lawType
     * @param int $licensed
     * @return array|ActiveDataProvider|\yii\db\ActiveRecord[]
     */
    public function findAll(
        $limit = 10,
        $useDataProvider = false,
        $byCategory = 0,
        $priceFrom = 0,
        $priceTo = 0,
        $lawType = '',
        $licensed = -1
    ) {
        $data = Product::find()->where(['status' => 1])->orderBy('id DESC');

        if ($limit > 0) {
            $data->limit($limit);
        }

        if ($byCategory > 0) {
            $data->andWhere(['fk_category' => $byCategory]);
        }

        if ($priceFrom > 0) {
            $data->andWhere('price >='.intval($priceFrom));
        }

        if ($priceTo > 0) {
            $data->andWhere('price <'.intval($priceTo));
        }

        if ($lawType) {
            $data->andWhere(['law_type' => $lawType]);
        }

        if ($licensed != -1) {
            $data->andWhere(['licensed' => $licensed]);
        }


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