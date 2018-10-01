<?php

namespace app\tests\unit\handlers;

use app\bus\commands\ChangePasswordCommand;
use app\bus\handlers\ChangePasswordHandler;
use app\bus\repositories\UsersRepository;
use Codeception\Test\Unit;
use dektrium\user\models\User;
use Mockery;
use UnitTester;

class ChangePasswordHandlerTest extends Unit
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
        $command = new ChangePasswordCommand();
        $command->userId = 123;
        $command->currentPassword = '12345678';
        $command->newPassword = '1234';
        $command->newPasswordRepeat = '1234';

        $user = $this->getMockBuilder(User::class)->setMethods(['save', 'attributes', 'resetPassword'])->getMock();
        $user->method('save')->willReturn(true);
        $user->method('attributes')->willReturn(['id', 'password_hash']);
        $user->method('resetPassword')->with($command->newPassword)->willReturn(true);
        $user->password_hash = '$2y$10$uXaCa1wdfJpCDfBnhzjmQuIQnuzOVsY.TF4CfnralgRvyCiaaorE2';

        $usersRepository = Mockery::mock(UsersRepository::class);
        $usersRepository->shouldReceive('findOneById')->once()->withArgs([$command->userId])->andReturn($user);
        $usersRepository->shouldReceive('save')->once()->withArgs([$user]);

        $handler = new ChangePasswordHandler($usersRepository);
        $handler->handle($command);
    }

    public function testHandleExceptionRaisedPasswordInvalid()
    {
        $this->tester->expectException(\Exception::class, function () {
            $command = new ChangePasswordCommand();
            $command->userId = 123;
            $command->currentPassword = '12345678';
            $command->newPassword = '1234';
            $command->newPasswordRepeat = '1234';

            $user = $this->getMockBuilder(User::class)->setMethods(['save', 'attributes', 'resetPassword'])->getMock();
            $user->method('save')->willReturn(true);
            $user->method('attributes')->willReturn(['id', 'password_hash']);
            $user->method('resetPassword')->with($command->newPassword)->willReturn(true);
            $user->password_hash = 'invalid_hash';

            $usersRepository = Mockery::mock(UsersRepository::class);
            $usersRepository->shouldReceive('findOneById')->once()->withArgs([$command->userId])->andReturn($user);
            $usersRepository->shouldReceive('save')->never()->withArgs([$user]);

            $handler = new ChangePasswordHandler($usersRepository);
            $handler->handle($command);
        });
    }

    public function testHandleExceptionRaisedUserNotFound()
    {
        $this->tester->expectException(\Exception::class, function () {
            $command = new ChangePasswordCommand();
            $command->userId = 123;
            $command->currentPassword = '12345678';
            $command->newPassword = '1234';
            $command->newPasswordRepeat = '1234';

            $usersRepository = Mockery::mock(UsersRepository::class);
            $usersRepository->shouldReceive('findOneById')->once()->withArgs([$command->userId])->andReturn(null);
            $usersRepository->shouldReceive('save')->never();

            $handler = new ChangePasswordHandler($usersRepository);
            $handler->handle($command);
        });
    }

    public function testHandleExceptionRaisedPasswordsIncorrect()
    {
        $this->tester->expectException(\Exception::class, function () {
            $command = new ChangePasswordCommand();
            $command->userId = 123;
            $command->currentPassword = '12345678';
            $command->newPassword = '1234';
            $command->newPasswordRepeat = '123456';

            $user = $this->getMockBuilder(User::class)->setMethods(['save', 'attributes', 'resetPassword'])->getMock();
            $user->method('save')->willReturn(true);
            $user->method('attributes')->willReturn(['id', 'password_hash']);
            $user->method('resetPassword')->with($command->newPassword)->willReturn(true);
            $user->password_hash = 'invalid_hash';

            $usersRepository = Mockery::mock(UsersRepository::class);
            $usersRepository->shouldReceive('findOneById')->once()->withArgs([$command->userId])->andReturn($user);
            $usersRepository->shouldReceive('save')->never()->withArgs([$user]);

            $handler = new ChangePasswordHandler($usersRepository);
            $handler->handle($command);
        });
    }

}
