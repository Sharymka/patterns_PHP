<?php
require_once 'bootstrap.php';

$user = new User('Владимир', 'Иванов', 'ivan@mail.ru', '977-765-45-67');
$user->setNotifications(['SMS', 'mail', 'chromeNotification']);

$notification = new Notification();

$smsNotification = new EmailNotification(new SMSNotification($notification));
$smsNotification->send($user);
