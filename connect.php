<?php
include_once ('Product.php');

$DBConInfo = [
    'server'   => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'name'     => 'test',
];
$connection = new mysqli(
    $DBConInfo['server'],
    $DBConInfo['username'],
    $DBConInfo['password'],
    $DBConInfo['name']
);

if($connection->connect_errno > 0){
    echo"DATA BASE CONNECTION ERROR ";
    exit();
}
$InstrumentDB = new Product($connection);
