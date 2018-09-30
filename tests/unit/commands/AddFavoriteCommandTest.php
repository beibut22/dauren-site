<?php

namespace app\tests\unit\commands;


use app\bus\commands\AddProductCommand;
use Codeception\Test\Unit;
use app\bus\commands\AddFavoriteCommand;

class AddFavoriteCommandTest extends Unit
{
    public function testCreate()
    {
        $command = new AddFavoriteCommand();
        $command->userId = 123;
        $command->productId = 1234;
    
        $this->assertEquals($command->userId, 123);
        $this->assertEquals($command->productId, 1234);
    }
}
