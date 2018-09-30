<?php

namespace app\tests\unit\commands;

use Codeception\Test\Unit;
use Mockery;
use UnitTester;
use app\models\Favorite;
use app\bus\factories\FavoriteFactory;
use app\bus\repositories\FavoritesRepository;
use app\bus\commands\RemoveFavoriteCommand;
use app\bus\handlers\RemoveFavoriteHandler;

class RemoveFavoriteHandlerTest extends Unit
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
        $command = new RemoveFavoriteCommand();
        $command->userId = 1;
        $command->productId = 2;

        $favorite = $this->getMockBuilder(Favorite::class)->setMethods(['save', 'attributes'])->getMock();
        $favorite->method('save')->willReturn(true);
        $favorite->method('attributes')->willReturn(['id', 'fk_user', 'fk_product']);

        $favoritesRepo = Mockery::mock(FavoritesRepository::class);
        $favoritesRepo->shouldReceive('findOneByProductIdAndUserId')->withArgs([$command->productId,$command->userId])->once()->andReturn($favorite);
        $favoritesRepo->shouldReceive('delete')->withArgs([$favorite])->once()->andReturnTrue();

        $handler = new RemoveFavoriteHandler($favoritesRepo);
        $handler->handle($command);
    }
}
