<?php

class YandexPayer implements PayerInterface
{
    public function pay(): void
    {
        echo "payment by Yandex has been done successfully";
    }
}