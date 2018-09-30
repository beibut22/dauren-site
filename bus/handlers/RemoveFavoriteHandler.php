<?php

namespace app\bus\handlers;

use app\bus\commands\RemoveFavoriteCommand;
use app\bus\repositories\FavoritesRepository;
use trntv\bus\interfaces\Handler;

class RemoveFavoriteHandler implements Handler
{
    /**
     * @var FavoritesRepository
     */
    private $favoritesRepository;

    /**
     * RemoveFavoriteHandler constructor.
     * @param FavoritesRepository $favoritesRepository
     */
    public function __construct(FavoritesRepository $favoritesRepository)
    {
        $this->favoritesRepository = $favoritesRepository;
    }

    /**
     * @param RemoveFavoriteCommand $command
     * @return mixed|void
     * @throws \Exception
     */
    public function handle($command)
    {
        $favorite = $this->favoritesRepository->findOneByProductIdAndUserId($command->productId, $command->userId);
        $this->favoritesRepository->delete($favorite);
    }
}