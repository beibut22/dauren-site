<?php

namespace app\tests\unit\commands;

use app\bus\commands\AddProductCommand;
use app\bus\factories\ProductFactory;
use app\bus\handlers\AddProductHandler;
use app\bus\repositories\ProductsRepository;
use Codeception\Test\Unit;
use Mockery;
use UnitTester;

class AddProductHandlerTest extends Unit
{
    /**
     * @var UnitTester
     */
    protected $tester;

    public function tearDown()
    {
        parent::tearDown();
        Mockery::close();
    }

    public function testHandle()
    {
        $command = new AddProductCommand();
        $command->userId = 1;
        $command->categoryId = 1;
        $command->name = 'product';
        $command->productType = 'sell';
        $command->country = 'Country';
        $command->city = 'City';
        $command->address = 'Address';
        $command->zip = 'Zip';
        $command->lawType = 'Private';
        $command->licensed = 0;
        $command->priceActive = 1000;
        $command->priceProfit = 1001;
        $command->perspectives = 1002;
        $command->price = 1003;
        $command->priceTrade = 1004;
        $command->description = 'Some description';

        $product = $this->getMockBuilder(Product::class)->setMethods(['save', 'attributes'])->getMock();
        $product->method('save')->willReturn(true);
        $product->method('attributes')->willReturn(['id', 'password_hash']);

        $productsFactory = Mockery::mock(ProductFactory::class);
        $productsFactory->shouldReceive('create')->withArgs([
            $command->userId,
            $command->address,
            $command->categoryId,
            $command->city,
            $command->country,
            $command->description,
            $command->lawType,
            $command->licensed,
            $command->name,
            $command->perspectives,
            $command->price,
            $command->priceActive,
            $command->priceProfit,
            $command->priceTrade,
            $command->productType,
            $command->zip,
        ])->once()->andReturn($product);

        $productsRepo = Mockery::mock(ProductsRepository::class);
        $productsRepo->shouldReceive('save')->withArgs([$product])->once()->andReturnTrue();

        $handler = new AddProductHandler($productsRepo, $productsFactory);
        $handler->handle($command);
    }
}
