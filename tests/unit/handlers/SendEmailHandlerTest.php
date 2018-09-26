<?php

namespace app\tests\unit\commands;

use app\bus\commands\SendEmailCommand;
use Codeception\Test\Unit;
use Mockery;
use UnitTester;

class SendEmailHandlerTest extends Unit
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
        $this->markTestSkipped();
        $command = new SendEmailCommand();
    }
}
