<?php

namespace app\bus\handlers;

use app\bus\commands\UploadFileCommand;
use Aws\S3\S3Client;
use Aws\S3\S3ClientInterface;
use trntv\bus\interfaces\Handler;

class UploadFileHandler implements Handler
{
    /**
     * @var S3ClientInterface
     */
    private $s3Client;

    /**
     * UploadFileHandler constructor. 
     * @param S3Client $s3Client
     */
    public function __construct(S3Client $s3Client)
    {
        $this->s3Client = $s3Client;
    }

    /**
     * @param UploadFileCommand $command
     * @return mixed|void
     * @throws \Exception
     */
    public function handle($command)
    {
        $command->imageFile->saveAs('upload/' . $command->fileName);

        if ($command->uploadStrategy == 'DO') {            
            $this->s3Client->putObject([
                'Bucket' => $command->uploadBucket,
                'Key' => '1biz/' . $command->fileName,
                'SourceFile' => 'upload/' . $command->fileName,
                'ACL' => 'public-read',
            ]);
        }
    }
}