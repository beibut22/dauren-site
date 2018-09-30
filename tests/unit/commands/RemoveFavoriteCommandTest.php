<?php

namespace app\tests\unit\commands;


use Codeception\Test\Unit;
use app\bus\commands\RemoveFavoriteCommand;

class RemoveFavoriteCommandTest extends Unit
{
    public function testCreate()
    {
        $command = new RemoveFavoriteCommand();
        $command->userId = 123;
        $command->productId = 1234;
    
        $this->assertEquals($command->userId, 123);
        $this->assertEquals($command->productId, 1234);
    }
}
