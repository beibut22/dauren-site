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

    public $imgFile1;

    public $img2;

    public $imgFile2;

    public $img3;

    public $imgFile3;

    public function rules()
    {
        return [
            [['name', 'country', 'city', 'price', 'description'], 'required'],
            [['price', 'priceActive', 'priceProfit', 'priceTrade'], 'number'],
            [['imgFile1', 'imgFile2', 'imgFile3'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
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
            'licensed' => 'Вид деятельности',
            'priceActive' => 'Стоимость собств. активов',
            'priceProfit' => 'Приблиз. доход',
            'perspectives' => 'Перспективы роста дохода',
            'price' => 'Продажная цена',
            'priceTrade' => 'Продажная цена (торг)',
            'description' => 'Описание',
            'img1' => 'Картинка 1',
            'imgFile1' => 'Картинка 1',
            'img2' => 'Картинка 2',
            'imgFile2' => 'Картинка 2',
            'img3' => 'Картинка 3',
            'imgFile3' => 'Картинка 3',
        ];
    }

//    public function upload()
//    {
//        if ($this->validate()) {
//            foreach ($this->imageFiles as $file) {
//                $file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
//            }
//            return true;
//        } else {
//            return false;
//        }
//    }

}