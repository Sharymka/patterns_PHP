<?php

class PayerFactory
{
    private string $paymentMethod;
    function __construct(User $user){
        $this->paymentMethod = $user->getPaymentMethod();
    }
    public function createPayer(): ?PayerInterface {
        $className = $this->paymentMethod . 'Payer';

        if(class_exists($className)) {
            return new $className;
        }
        return null;
    }

}