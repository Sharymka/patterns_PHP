<?php

require_once 'NotificationInterface.php';
class Decorator implements NotificationInterface

{
    protected $notification;

    function __construct(NotificationInterface $notification) {
        $this->notification = $notification;
    }

    public function send(User $user) {
        $this->notification->send($user);
    }

}