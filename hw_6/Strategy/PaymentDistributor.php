<?php

class PaymentDistributor
{
    function __construct(
        private PayerInterface $payer) {
    }

    public function pay() {
        $this->payer->pay();
    }
}