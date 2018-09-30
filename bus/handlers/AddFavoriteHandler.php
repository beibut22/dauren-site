<?php

namespace app\bus\handlers;

use app\bus\commands\AddFavoriteCommand;
use app\bus\repositories\FavoritesRepository;
use trntv\bus\interfaces\Handler;
use app\bus\factories\FavoriteFactory;

class AddFavoriteHandler implements Handler
{
    /**
     * @var FavoritesRepository
     */
    private $favoritesRepository;

    private $favoriteFactory;

    /**
     * AddFavoriteHandler constructor.
     * @param FavoritesRepository $favoritesRepository
     * @param ProductFactory $favoriteFactory
     */
    public function __construct(FavoritesRepository $favoritesRepository, FavoriteFactory $favoriteFactory)
    {
        $this->favoritesRepository = $favoritesRepository;
        $this->favoriteFactory = $favoriteFactory;
    }

    /**
     * @param AddFavoriteCommand $command
     * @return mixed|void
     * @throws \Exception
     */
    public function handle($command)
    {
        $favorite = $this->favoriteFactory->create($command->userId, $command->productId);
        $this->favoritesRepository->save($favorite);
    }
}