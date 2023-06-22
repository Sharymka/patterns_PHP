<?php
require_once "bootstrap.php";
require_once "PayerInterface.php";

$user = new User('Владимир', 'Иванов', 'ivan@mail.ru', '977-765-45-67');
$user->setPaymentMethod('Qiwi');
$distributor = new PaymentDistributor((new PayerFactory($user))->createPayer());
$distributor->pay();

