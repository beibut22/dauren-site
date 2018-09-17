<?php

namespace app\bus\handlers;

use app\bus\commands\AddProductCommand;
use app\bus\factories\ProductFactory;
use app\bus\repositories\ProductsRepository;
use trntv\bus\interfaces\Handler;

class AddProductHandler implements Handler
{
    /**
     * @var ProductsRepository
     */
    private $productsRepository;

    /**
     * AddProductHandler constructor.
     * @param ProductsRepository $productsRepository
     * @param ProductFactory $productFactory
     */
    public function __construct(ProductsRepository $productsRepository, ProductFactory $productFactory)
    {
        $this->productsRepository = $productsRepository;
        $this->productFactory = $productFactory;
    }

    /**
     * @param AddProductCommand $command
     * @return mixed|void
     * @throws \Exception
     */
    public function handle($command)
    {
        $product = $this->productFactory->create($command->userId, $command->address, $command->categoryId,
            $command->city, $command->country, $command->description, $command->lawType, $command->licensed,
            $command->name, $command->perspectives, $command->price, $command->priceActive, $command->priceProfit,
            $command->priceTrade, $command->productType, $command->zip);

        $this->productsRepository->save($product);
    }
}