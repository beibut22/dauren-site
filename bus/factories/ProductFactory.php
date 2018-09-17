<?php

namespace app\bus\factories;

use app\models\Product;

class ProductFactory
{
    /**
     * @param $userId
     * @param $address
     * @param $categoryId
     * @param $city
     * @param $country
     * @param $description
     * @param $lawType
     * @param $licensed
     * @param $name
     * @param $perspectives
     * @param $price
     * @param $priceActive
     * @param $priceProfit
     * @param $priceTrade
     * @param $productType
     * @param $zip
     * @return Product
     */
    public function create(
        $userId,
        $address,
        $categoryId,
        $city,
        $country,
        $description,
        $lawType,
        $licensed,
        $name,
        $perspectives,
        $price,
        $priceActive,
        $priceProfit,
        $priceTrade,
        $productType,
        $zip
    ) {
        return new Product([
            'fk_user' => $userId,
            'address' => $address,
            'fk_category' => $categoryId,
            'city' => $city,
            'country' => $country,
            'description' => $description,
            'law_type' => $lawType,
            'licensed' => $licensed,
            'name' => $name,
            'perspectives' => $perspectives,
            'price' => $price,
            'price_active' => $priceActive,
            'price_profit' => $priceProfit,
            'price_trade' => $priceTrade,
            'product_type' => $productType,
            'zip' => $zip,
        ]);
    }


}