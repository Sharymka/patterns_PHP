<?php

namespace factories\postgresql;

use AbstractFactoryInterface;
use factories\QueryBuilder;
use interfaces\ConnectionInterface;
use QueryBuilderInterface;


class PostgreSQLFactory implements AbstractFactoryInterface
{

    public function createConnection(): ConnectionInterface
    {
        return new PostgreSQLConnection();
    }

    public function createQueryBuilder(): QueryBuilderInterface
    {
        $conn = $this->createConnection();

        return new QueryBuilder($conn);
    }
}