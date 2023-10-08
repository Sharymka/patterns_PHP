<?php

class Notification implements NotificationInterface
{
    public function send(User $user)
    {

        echo "notification has been send" . " \n";
    }


}