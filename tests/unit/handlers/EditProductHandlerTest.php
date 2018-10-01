<?php

namespace app\tests\unit\handlers;

use app\bus\commands\EditProductCommand;
use app\bus\handlers\AddProductHandler;
use app\bus\handlers\EditProductHandler;
use app\bus\repositories\ProductsRepository;
use Codeception\Test\Unit;
use Mockery;
use UnitTester;

class EditProductHandlerTest extends Unit
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
        $command = new EditProductCommand();
        $command->userId = 1;
        $command->productId = 1;
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
        $product->method('attributes')->willReturn([
            'id',
            'fk_category',
            'city',
            'country',
            'description',
            'law_type',
            'licensed',
            'name',
            'perspectives',
            'price',
            'price_active',
            'price_profit',
            'price_trade',
            'product_type',
            'zip',
        ]);

        $productsRepo = Mockery::mock(ProductsRepository::class);
        $productsRepo->shouldReceive('findOneByIdAndUserId')->withArgs([
            $command->productId,
            $command->userId,
        ])->once()->andReturn($product);
        $productsRepo->shouldReceive('save')->once();

        $handler = new EditProductHandler($productsRepo);
        $handler->handle($command);
    }
}
