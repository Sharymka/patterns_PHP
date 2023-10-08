<?php

namespace factories\postgresql;

use interfaces\ConnectionInterface;

use AbstractFactoryInterface;
use QueryBuilderInterface;
use factories\QueryBuilder;


class MySQLFactory implements AbstractFactoryInterface
{

    public function createConnection(): ConnectionInterface
    {
        return new OracleConnection();
    }

    public function createQueryBuilder(): QueryBuilderInterface
    {
        $conn = $this->createConnection();

        return new QueryBuilder($conn);
    }
}