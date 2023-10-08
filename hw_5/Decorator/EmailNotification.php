<?php

class EmailNotification extends Decorator
{

    public function send(User $user)
    {
        foreach ($user->getNotifications() as $notification) {
            if ($notification == "mail") {
                echo "notification has been send on mail:" . $user->getMail() . " \n";
            }
        }

        parent::send($user);
    }
}