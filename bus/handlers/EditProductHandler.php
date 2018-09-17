<?php

namespace app\bus\handlers;

use app\bus\commands\EditProductCommand;
use app\bus\repositories\ProductsRepository;
use trntv\bus\interfaces\Handler;

class EditProductHandler implements Handler
{
    /**
     * @var ProductsRepository
     */
    private $productsRepository;

    /**
     * AddProductHandler constructor.
     * @param ProductsRepository $productsRepository
     */
    public function __construct(ProductsRepository $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }

    /**
     * @param EditProductCommand $command
     * @return mixed|void
     * @throws \Exception
     */
    public function handle($command)
    {
        $product = $this->productsRepository->findOneByIdAndUserId($command->productId, $command->userId);
        if ($product == null) {
            throw new \Exception('Not found with Id: '.$command->productId.' userId: '.$command->userId);
        }

        $product->address = $command->address;
        $product->fk_category = $command->categoryId;
        $product->city = $command->city;
        $product->country = $command->country;
        $product->description = $command->description;
        $product->law_type = $command->lawType;
        $product->licensed = $command->licensed;
        $product->name = $command->name;
        $product->perspectives = $command->perspectives;
        $product->price = $command->price;
        $product->price_active = $command->priceActive;
        $product->price_profit = $command->priceProfit;
        $product->price_trade = $command->priceTrade;
        $product->product_type = $command->productType;
        $product->zip = $command->zip;

        $this->productsRepository->save($product);
    }
}