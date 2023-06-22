<?php

class QiwiPayer implements PayerInterface
{

    public function pay(): void
    {
        echo "payment by Qiwi has been done successfully";
    }
}