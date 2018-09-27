<?php

namespace app\bus\handlers;

use app\bus\commands\SendEmailCommand;
use trntv\bus\interfaces\Handler;
use wadeshuler\sendgrid\Mailer;
use yii\mail\MailerInterface;

class SendEmailHandler implements Handler
{
    /**
     * @var MailerInterface
     */
    private $mailer;

    /**
     * SendEmailHandler constructor.
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param SendEmailCommand $command
     * @return mixed|void
     * @throws \Exception
     */
    public function handle($command)
    {
        $result = $this->mailer->compose()
            ->setTo([$command->emailTo])
            ->setFrom([$command->email => $command->name])
            ->setReplyTo($command->email)
            ->setSubject($command->subject)
            ->setHtmlBody($command->htmlMessage)
            ->setTextBody($command->message)
            ->send(null);

        if (!$result) {
            throw new \Exception('Unable to send email, result code: '.$result);
        }

    }
}