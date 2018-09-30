<?php

namespace app\tests\unit\commands;


use app\bus\commands\AddProductCommand;
use Codeception\Test\Unit;
use app\bus\commands\AddFavoriteCommand;
use app\bus\commands\UploadFileCommand;

class UploadFileCommandTest extends Unit
{
    public function testCreate()
    {
        $command = new UploadFileCommand();
        $command->imageFile = "imageFile";
        $command->uploadStrategy = "uploadStrategy";
        $command->fileName = "fileName";
        $command->uploadBucket = "uploadBucket";
    
        $this->assertEquals($command->imageFile, "imageFile");
        $this->assertEquals($command->uploadStrategy, "uploadStrategy");
        $this->assertEquals($command->fileName, "fileName");
        $this->assertEquals($command->uploadBucket, "uploadBucket");
    }
}
