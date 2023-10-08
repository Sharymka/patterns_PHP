<?php

class WebMoneyPayer implements PayerInterface
{
    public function pay(): void
    {
        echo "payment by WebMoney has been done successfully";
    }
}