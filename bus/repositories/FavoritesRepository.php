<?php

namespace app\bus\repositories;

use app\models\Favorite;
use yii\data\ActiveDataProvider;

class FavoritesRepository
{
    public function save($favorite)
    {
        return $favorite->save();
    }

    public function delete($favorite)
    {
        return $favorite->delete();
    }

    public function findOneById($id)
    {
        return Favorite::findOne(['id' => $id]);
    }

    public function findOneByIdAndUserId($id, $userId)
    {
        return Favorite::findOne(['id' => $id, 'fk_user' => $userId]);
    }

    public function findOneByProductIdAndUserId($productId, $userId)
    {
        return Favorite::findOne(['fk_product' => $productId, 'fk_user' => $userId]);
    }

    public function findAllByUserId($userId, $useDataProvider = false)
    {
        $data = Favorite::find()->where(['fk_user' => $userId]);

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