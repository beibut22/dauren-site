<?php

namespace app\models;

use yii\base\Model;

/**
 * AddForm is the model behind the add form.
 *
 * @property double $amount
 * @property string $wallet
 */
class AddForm extends Model
{
    public $categoryId;

    public $name;

    public $productType;

    public $country;

    public $city;

    public $address;

    public $zip;

    public $lawType;

    public $licensed;

    public $priceActive;

    public $priceProfit;

    public $perspectives;

    public $price;

    public $priceTrade;

    public $description;

    public $img1;

    public $img2;

    public $img3;

    public function rules()
    {
        return [
            [['name', 'country', 'city', 'address', 'zip', 'price', 'description'], 'required'],
            [['price', 'priceActive', 'priceProfit', 'priceTrade'], 'number'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'categoryId' => 'Категория',
            'name' => 'Название',
            'productType' => 'Операция',
            'country' => 'Страна',
            'city' => 'Город',
            'address' => 'Адрес',
            'zip' => 'Индекс',
            'lawType' => 'Право собственности',
            'licensed' => 'Требует лицензирование',
            'priceActive' => 'Стоимость собственных активов',
            'priceProfit' => 'Приблизительный доход бизнеса',
            'perspectives' => 'Перспективы роста дохода',
            'price' => 'Продажная цена',
            'priceTrade' => 'Продажная цена с торгом',
            'description' => 'Описание',
            'img1' => 'Картинка 1',
            'img2' => 'Картинка 2',
            'img3' => 'Картинка 3',
        ];
    }

}