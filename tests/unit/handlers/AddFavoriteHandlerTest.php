<?php

namespace app\tests\unit\handlers;

use Codeception\Test\Unit;
use Mockery;
use UnitTester;
use app\bus\commands\AddFavoriteCommand;
use app\models\Favorite;
use app\bus\factories\FavoriteFactory;
use app\bus\repositories\FavoritesRepository;
use app\bus\handlers\AddFavoriteHandler;

class AddFavoriteHandlerTest extends Unit
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
        $command = new AddFavoriteCommand();
        $command->userId = 1;
        $command->productId = 2;

        $favorite = $this->getMockBuilder(Favorite::class)->setMethods(['save', 'attributes'])->getMock();
        $favorite->method('save')->willReturn(true);
        $favorite->method('attributes')->willReturn(['id', 'fk_user', 'fk_product']);

        $factory = Mockery::mock(FavoriteFactory::class);
        $factory->shouldReceive('create')->withArgs([$command->userId, $command->productId])->once()->andReturn($favorite);

        $favoritesRepo = Mockery::mock(FavoritesRepository::class);
        $favoritesRepo->shouldReceive('save')->withArgs([$favorite])->once()->andReturnTrue();

        $handler = new AddFavoriteHandler($favoritesRepo, $factory);
        $handler->handle($command);
    }
}
