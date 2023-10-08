<?php

class SMSNotification extends Decorator
{
    public function send(User $user) {
        foreach ( $user->getNotifications() as $notification) {
           if ($notification == "SMS") {
               echo "notification has been send on number:" . $user->getNumber() . " \n";
           }
        }

        parent::send($user);
    }
}