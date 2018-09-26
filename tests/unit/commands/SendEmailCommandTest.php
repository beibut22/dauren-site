<?php

namespace app\tests\unit\commands;


use app\bus\commands\SendEmailCommand;
use Codeception\Test\Unit;

class SendEmailCommandTest extends Unit
{
    public function testCreate()
    {
        $command = new SendEmailCommand();
        $command->name = 'name';
        $command->email = 'email';
        $command->message = 'message';
        $command->htmlMessage = 'htmlMessage';
        $command->emailTo = 'emailTo';
        $command->subject = 'subject';


        $this->assertEquals($command->name, 'name');
        $this->assertEquals($command->email, 'email');
        $this->assertEquals($command->message, 'message');
        $this->assertEquals($command->htmlMessage, 'htmlMessage');
        $this->assertEquals($command->emailTo, 'emailTo');
        $this->assertEquals($command->subject, 'subject');
    }
}
