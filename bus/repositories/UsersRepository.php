<?php

namespace app\bus\repositories;

use dektrium\user\models\User;
use yii\data\ActiveDataProvider;

class UsersRepository
{
    /**
     * @param User $user
     * @return bool
     */
    public function save($user)
    {
        return $user->save();
    }

    /**
     * @param $id
     * @return null|User
     */
    public function findOneById($id)
    {
        return User::findOne(['id' => $id]);
    }

    /**
     * @param $authKey string
     * @return null|User
     */
    public function findOneByAuthKey($authKey)
    {
        return User::findOne(['auth_key' => $authKey]);
    }

    /**
     * @param $email
     * @return null|User
     */
    public function findOneByEmail($email)
    {
        return User::findOne(['email' => $email]);
    }

    public function findAll($useDataProvider = false)
    {
        $data = User::find();

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