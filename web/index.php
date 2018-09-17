<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

function pv($variable, $name = false)
{

    echo '<pre>'.PHP_EOL;
    if ($name) {
        echo $name.' = ';
    }
    if (is_array($variable)) {
        if ($name) {
            echo '('.count($variable).') ';
        }
        print_r($variable);
    } else {
        var_dump($variable);
    }

    echo '</pre>'.PHP_EOL;
}

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__.'/../config/web.php';

(new yii\web\Application($config))->run();
