<?php

namespace app\bus\handlers;

use app\bus\commands\AddProductCommand;
use app\bus\repositories\UsersRepository;
use trntv\bus\interfaces\Handler;

class AddProductHandler implements Handler
{
    /**
     * @var UsersRepository
     */
    private $usersRepository;

    /**
     * ChangePasswordHandler constructor.
     * @param UsersRepository $usersRepository
     */
    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    /**
     * @param AddProductCommand $command
     * @return mixed|void
     * @throws \Exception
     */
    public function handle($command)
    {

    }
}