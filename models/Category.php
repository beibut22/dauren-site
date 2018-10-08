<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property integer $name
 * @property integer created_at
 * @property integer updated_at
 */
class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'categories';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Название категории',
            'created_at' => 'Создано',
        ];
    }

}
