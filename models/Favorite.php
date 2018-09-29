<?php

namespace app\models;

use app\models\Product;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "favorites".
 *
 * @property integer $id
 * @property integer $fk_user
 * @property integer $fk_product
 * @property Product $product
 * @property integer created_at
 * @property integer updated_at
 */
class Favorite extends ActiveRecord
{
    public static function tableName()
    {
        return 'favorites';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'fk_product']);
    }
}
