<?php

use interfaces\ConnectionInterface;

interface AbstractFactoryInterface {
    public function createConnection(): ConnectionInterface;
    public function createQueryBuilder(): QueryBuilderInterface;
}
