<?php
$path = dirname(__DIR__);
require $path . '/vendor/autoload.php';

use Dotenv\Environment\DotenvFactory;
use Dotenv\Environment\Adapter\EnvConstAdapter as Adapter;
use Dotenv\Dotenv;

(Dotenv::create($path, null, new DotenvFactory([new Adapter()])))->load();

defined('YII_DEBUG') or define('YII_DEBUG', $_ENV['YII_DEBUG']);
defined('YII_ENV') or define('YII_ENV', $_ENV['YII_ENV']);

require $path . '/vendor/yiisoft/yii2/Yii.php';
$config = require $path . '/config/web.php';
(new yii\web\Application($config))->run();
