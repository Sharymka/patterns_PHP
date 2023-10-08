<?php

require_once 'bootstrap.php';

use factories\postgresql\OracleFactory;
use factories\postgresql\PostgreSQLFactory;

class Application {

    function __construct(private AbstractFactoryInterface $factory) {}

    public function start(): void
    {
        echo "Started \r\n";
        $queryBuilder = $this->factory->createQueryBuilder();
        $user = $queryBuilder
                    ->select('name')
                    ->table('users')
                    ->condition([ 'id' => 12 ])
                    ->execute();

        if (!$user) {
            return;
        }

        echo "Found: " . $user;
    }
}

$app = new Application( new PostgreSQLFactory());
$app->start();