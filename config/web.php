<?php

use Aws\Credentials\CredentialProvider;
use Aws\S3\S3Client;
use wadeshuler\sendgrid\Mailer;

$params = require __DIR__.'/params.php';
$db = require __DIR__.'/db.php';

$config = [
    'id' => '1biz',
    'name' => '1biz.kz',
    'sourceLanguage' => 'ru',
    'language' => 'ru',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'container' => [
        'definitions' => [
            'wadeshuler\sendgrid\Mailer' => function ($container, $params, $config) {
                return new Mailer([
                    'apiKey' => getenv('SENDGRID_API_KEY'),
                    'useFileTransport' => false,
                ]);
            },
            'Aws\S3\S3Client' => function ($container, $params, $config) {
                $provider = CredentialProvider::env();

                return new S3Client([
                    'version' => 'latest',
                    'region' => getenv('STORAGE_REGION'),
                    'endpoint' => getenv('STORAGE_ENDPOINT'),
                    'credentials' => $provider,
                ]);
            },
        ],
        'singletons' => [],
    ],
    'components' => [
        'commandBus' => [
            'class' => 'trntv\bus\CommandBus',
            'locator' => [
                'class' => 'trntv\bus\locators\ClassNameLocator',
                'handlers' => [
                    'app\bus\commands\ChangePasswordCommand' => 'app\bus\handlers\ChangePasswordHandler',
                    'app\bus\commands\AddProductCommand' => 'app\bus\handlers\AddProductHandler',
                    'app\bus\commands\EditProductCommand' => 'app\bus\handlers\EditProductHandler',
                    'app\bus\commands\SendEmailCommand' => 'app\bus\handlers\SendEmailHandler',
                    'app\bus\commands\AddFavoriteCommand' => 'app\bus\handlers\AddFavoriteHandler',
                    'app\bus\commands\RemoveFavoriteCommand' => 'app\bus\handlers\RemoveFavoriteHandler',
                    'app\bus\commands\UploadFileCommand' => 'app\bus\handlers\UploadFileHandler',
                ],
            ],
        ],
        'request' => [
            'cookieValidationKey' => 'LK_gA0NkkZwg9OYsJ8pzRLMc4alOBkiL',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'wadeshuler\sendgrid\Mailer',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',
                'index' => 'site/index',
                'login' => 'user/security/login',
                'register' => 'user/registration/register',
                'recover' => 'user/recovery/request',
                'logout' => 'site/logout',

                'listing' => 'site/listing',
                'item/<id:\w+>' => 'site/item',

                'cabinet/product/<id:\w+>' => 'cabinet/product',

                'admin' => 'adminer/main/index',
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@app/views/user',
                ],
            ],
        ],

    ],
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'admins' => ['admin'],
            'enableConfirmation' => false,
            'urlRules' => [],
            'controllerMap' => [],
            'mailer' => [
                'sender' => ['admin@1biz.kz' => '1biz Admin'],
                'welcomeSubject' => 'Добро пожаловать на 1biz.kz',
                'recoverySubject' => 'Восстановление доступа',
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
