<?php

namespace app\bus\handlers;

use app\bus\commands\ChangePasswordCommand;
use app\bus\repositories\UsersRepository;
use dektrium\user\helpers\Password;
use trntv\bus\interfaces\Handler;

class ChangePasswordHandler implements Handler
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
     * @param ChangePasswordCommand $command
     * @return mixed|void
     * @throws \Exception
     */
    public function handle($command)
    {
        $user = $this->usersRepository->findOneById($command->userId);
        if (!$user) {
            throw new \Exception('Пользователь не найден');
        }

        if (!Password::validate($command->currentPassword, $user->password_hash)) {
            throw new \Exception('Неверный текущий пароль');
        }

        if ($command->newPassword != $command->newPasswordRepeat) {
            throw new \Exception('Пароли не совпадают');
        }

        $user->resetPassword($command->newPassword);

        $this->usersRepository->save($user);
    }
}