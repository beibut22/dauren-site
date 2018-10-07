<?php

namespace app\models;

use dektrium\user\models\User;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property integer $fk_user
 * @property integer $fk_category
 * @property Category $category
 * @property User $user
 * @property string $name
 * @property string $product_type
 * @property string $country
 * @property string $city
 * @property string $address
 * @property string $zip
 * @property string $law_type
 * @property integer $licensed
 * @property integer $price_active
 * @property integer $price_profit
 * @property integer $perspectives
 * @property integer $price
 * @property integer $price_trade
 * @property string $description
 * @property string $img1
 * @property string $img2
 * @property string $img3
 * @property integer $status
 * @property integer created_at
 * @property integer updated_at
 */
class Product extends ActiveRecord
{
    const STATUS_DISABLED = 0;

    const STATUS_ENABLED = 1;

    public static function tableName()
    {
        return 'products';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'fk_category']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'fk_user']);
    }

    public function attributeLabels()
    {
        return [
            'fk_user' => 'Пользователь',
            'fk_category' => 'Категория',
            'name' => 'Название',
            'product_type' => 'Операция',
            'country' => 'Страна',
            'city' => 'Город',
            'address' => 'Адрес',
            'zip' => 'Индекс',
            'law_type' => 'Право собственности',
            'licensed' => 'Вид деятельности',
            'price_active' => 'Стоимость собств. активов',
            'price_profit' => 'Приблиз. доход',
            'perspectives' => 'Перспективы роста дохода',
            'price' => 'Продажная цена',
            'price_trade' => 'Продажная цена (торг)',
            'description' => 'Описание',
            'img1' => 'Картинка 1',
            'img2' => 'Картинка 2',
            'img3' => 'Картинка 3',
            'created_at' => 'Создано',
            'status' => 'Статус',
        ];
    }


}
