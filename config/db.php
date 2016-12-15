<?php

use M1\Env\Parser;

// \Yii::getAlias('@webroot') <---- if need root path
$env = new Parser(file_get_contents('../.env'));
$env_conf = $env->getContent();

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host='.$env_conf['DB_HOST'].';dbname='.$env_conf['DB_NAME'],
    'username' => 'root' || $env_conf['DB_USER'],
    'password' => '' || $env_conf['DB_PASS'],
    'charset' => 'utf8',
];
