<?php

namespace app\tests\unit\commands;


use app\bus\commands\AddProductCommand;
use Codeception\Test\Unit;

class AddProductCommandTest extends Unit
{

    public function setUp()
    {
        parent::setUp();
    }

    public function testCreate()
    {
        $command = new AddProductCommand();
        $command->userId = 123;
        $command->address = 'address';
        $command->categoryId = 'categoryId';
        $command->city = 'city';
        $command->country = 'country';
        $command->description = 'description';
        $command->lawType = 'lawType';
        $command->licensed = 'licensed';
        $command->name = 'name';
        $command->perspectives = 'perspectives';
        $command->price = 'price';
        $command->priceActive = 'priceActive';
        $command->priceProfit = 'priceProfit';
        $command->priceTrade = 'priceTrade';
        $command->productType = 'productType';
        $command->zip = 'zip';

        $this->assertEquals($command->userId, 123);
        $this->assertEquals($command->address, 'address');
        $this->assertEquals($command->categoryId, 'categoryId');
        $this->assertEquals($command->city, 'city');
        $this->assertEquals($command->country, 'country');
        $this->assertEquals($command->description, 'description');
        $this->assertEquals($command->lawType, 'lawType');
        $this->assertEquals($command->licensed, 'licensed');
        $this->assertEquals($command->name, 'name');
        $this->assertEquals($command->perspectives, 'perspectives');
        $this->assertEquals($command->price, 'price');
        $this->assertEquals($command->priceActive, 'priceActive');
        $this->assertEquals($command->priceProfit, 'priceProfit');
        $this->assertEquals($command->priceTrade, 'priceTrade');
        $this->assertEquals($command->productType, 'productType');
        $this->assertEquals($command->zip, 'zip');
    }
}
