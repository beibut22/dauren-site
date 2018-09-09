<?php

namespace app\bus\commands;

class ChangePasswordCommand
{
    public $userId;

    public $currentPassword;

    public $newPassword;

    public $newPasswordRepeat;

}