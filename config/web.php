<?php

$params = require __DIR__.'/params.php';
$db = require __DIR__.'/db.php';

$config = [
    'id' => '1biz',
    'sourceLanguage' => 'ru',
    'language' => 'ru',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
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
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
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

                'cabinet/product/<id:\w+>' => 'cabinet/product',

                'admin' => 'admin/index',
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
            'controllerMap' => [
//                'registration' => 'app\controllers\user\RegistrationController',
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
