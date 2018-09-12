<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property integer $fk_user
 * @property integer $fk_category
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


}
