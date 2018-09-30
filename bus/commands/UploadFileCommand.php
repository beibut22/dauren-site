<?php

namespace app\bus\commands;

class UploadFileCommand
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    /**
     * @var string
     */
    public $uploadStrategy;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $uploadBucket;
}