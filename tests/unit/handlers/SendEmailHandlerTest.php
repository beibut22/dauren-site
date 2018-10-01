<?php

namespace app\tests\unit\handlers;

use app\bus\commands\SendEmailCommand;
use app\bus\handlers\SendEmailHandler;
use Codeception\Test\Unit;
use Mockery;
use UnitTester;
use wadeshuler\sendgrid\Mailer;

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
        $command = new SendEmailCommand();
        $command->name = 'name';
        $command->email = 'email';
        $command->message = 'message';
        $command->htmlMessage = 'htmlMessage';
        $command->emailTo = 'emailTo';
        $command->subject = 'subject';

        $mailer = Mockery::mock(Mailer::class);
        $mailer->shouldReceive('compose')->once()->andReturn($mailer);
        $mailer->shouldReceive('setTo')->withArgs([[$command->emailTo]])->once()->andReturn($mailer);
        $mailer->shouldReceive('setFrom')->withArgs([[$command->email => $command->name]])->once()->andReturn($mailer);
        $mailer->shouldReceive('setReplyTo')->withArgs([$command->email])->once()->andReturn($mailer);
        $mailer->shouldReceive('setSubject')->withArgs([$command->subject])->once()->andReturn($mailer);
        $mailer->shouldReceive('setHtmlBody')->withArgs([$command->htmlMessage])->once()->andReturn($mailer);
        $mailer->shouldReceive('setTextBody')->withArgs([$command->message])->once()->andReturn($mailer);
        $mailer->shouldReceive('send')->withArgs([null])->andReturnTrue();

        $handler = new SendEmailHandler($mailer);
        $handler->handle($command);
    }
}
