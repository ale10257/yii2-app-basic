<?php
$path = dirname(__DIR__);
require $path . '/vendor/autoload.php';

use Dotenv\Environment\DotenvFactory;
use Dotenv\Environment\Adapter\EnvConstAdapter as Adapter;
use Dotenv\Dotenv;

(Dotenv::create($path, null, new DotenvFactory([new Adapter()])))->load();

require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
