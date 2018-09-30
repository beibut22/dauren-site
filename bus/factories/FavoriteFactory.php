<?php

namespace app\bus\factories;

use app\models\Favorite;

class FavoriteFactory
{
    /**
     * @param $userId
     * @param $productId
     * @return Favorite
     */
    public function create($userId, $productId)
    {
        return new Favorite(['fk_user' => $userId, 'fk_product' => $productId]);
    }
}