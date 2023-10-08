<?php

use interfaces\ConnectionInterface;
use interfaces\RecordInterface;

interface QueryBuilderInterface {
    public function __construct(ConnectionInterface $connection);

    public function select(string $payload): QueryBuilderInterface;

    public function table(string $payload): QueryBuilderInterface;
    public function condition(array $payload): QueryBuilderInterface;

    public function execute(): RecordInterface | null;
};

abstract class AbstractQueryBuilder implements QueryBuilderInterface {
    public function __construct(protected ConnectionInterface $connection) {}

    public abstract function select(string $payload): QueryBuilderInterface;
    public abstract function table(string $payload): QueryBuilderInterface;
    public abstract function condition(array $payload): QueryBuilderInterface;
    public abstract function execute(): RecordInterface | null;
}
