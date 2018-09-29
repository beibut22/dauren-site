<?php

namespace app\bus\repositories;

use app\models\Favorite;
use yii\data\ActiveDataProvider;

class FavoritesRepository
{
    /**
     * @param Favorite $favorite
     * @return bool
     */
    public function save($favorite)
    {
        return $favorite->save();
    }

    /**
     * @param $id
     * @return null|Favorite
     */
    public function findOneById($id)
    {
        return Favorite::findOne(['id' => $id]);
    }

    public function findOneByIdAndUserId($id, $userId)
    {
        return Favorite::findOne(['id' => $id, 'fk_user' => $userId]);
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