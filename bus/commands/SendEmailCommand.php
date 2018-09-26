<?php

namespace app\bus\commands;

class SendEmailCommand
{
    public $name;

    public $email;

    public $message;

    public $htmlMessage;

    public $emailTo;

    public $subject;
}