<?php

namespace factories;

use AbstractQueryBuilder;
use factories\postgresql\UserRecord;
use interfaces\ConnectionInterface;
use interfaces\RecordInterface;
use QueryBuilderInterface;

class QueryBuilder extends AbstractQueryBuilder
{
    function __construct(ConnectionInterface $connection)
    {
        parent::__construct($connection);
    }

    private string $queryString = '';

    public function select(string $payload): QueryBuilderInterface
    {
        $this->queryString .= 'SELECT ' . $payload;

        return $this;
    }

    public function table(string $payload): QueryBuilderInterface
    {
        $this->queryString .= ' FROM ' . $payload;

        return $this;
    }

    public function condition(array $payload): QueryBuilderInterface
    {
        $key = array_keys($payload)[0];

        $this->queryString .= ' WHERE ' . $key . ' = ' . $payload[$key];


        return $this;
    }

    public function execute(): RecordInterface
    {
//        $this->connection->execute($payload);
        echo 'Built query: [' . $this->queryString . "]\r\n";
        echo "Executing..\r\n";

        return new UserRecord();
    }
}
