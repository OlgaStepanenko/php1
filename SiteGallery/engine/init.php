<?php

$distConfig = require __DIR__.'/../config/config.dist.php';

$config = $distConfig;

$mysqlConnect = mysqli_connect(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
);