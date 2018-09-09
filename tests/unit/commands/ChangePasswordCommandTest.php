<?php

namespace app\tests\unit\commands;


use app\bus\commands\ChangePasswordCommand;
use Codeception\Test\Unit;

class ChangePasswordCommandTest extends Unit
{

    public function setUp()
    {
        parent::setUp();
    }

    public function testCreate()
    {
        $command = new ChangePasswordCommand();
        $command->userId = 123;
        $command->currentPassword = 'current_password';
        $command->newPassword = 'new_password';
        $command->newPasswordRepeat = 'new_password_repeat';

        $this->assertEquals($command->userId, 123);
        $this->assertEquals($command->currentPassword, 'current_password');
        $this->assertEquals($command->newPassword, 'new_password');
        $this->assertEquals($command->newPasswordRepeat, 'new_password_repeat');
    }
}
