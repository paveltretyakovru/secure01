<?php

use M1\Env\Parser;

// \Yii::getAlias('@webroot') <---- if need root path
$env = new Parser(file_get_contents(__DIR__ . '/../.env'));
$env_conf = $env->getContent();

$host = (!empty($env_conf['DB_HOST'])) ? $env_conf['DB_HOST'] : 'localhost';
$pass = (!empty($env_conf['DB_PASS'])) ? $env_conf['DB_PASS'] : '';
$uname = (!empty($env_conf['DB_USER'])) ? $env_conf['DB_USER'] : 'root';
$dbname = (!empty($env_conf['DB_NAME'])) ? $env_conf['DB_NAME'] :'secure01';

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=' . $host . ';dbname=' . $dbname,
    'password' => $pass,
    'username' => $uname,
    'charset' => 'utf8',
];
