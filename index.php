<?php

    require_once __DIR__.'/vendor/autoload.php';

    $config = new \Doctrine\DBAL\Configuration();

    $connectionParams = array(
        'dbname' => 'doctrine',
        'user' => 'root',
        'password' => '123',
        'host' => 'localhost',
        'port' => 3306,
        'charset' => 'utf8',
        'driver' => 'pdo_mysql',
    );
    $dbh = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

    $sth = $dbh->query("SELECT customerName FROM customers WHERE customerNumber = 103");
    $users = $sth->fetchColumn();

    print_r($users);

?>
