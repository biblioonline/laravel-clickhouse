<?php

declare(strict_types=1);

namespace BiblioOnline\LaravelClickHouse\Tests\Database;

use PHPUnit\Framework\TestCase;
use BiblioOnline\LaravelClickHouse\Database\Connection;
use BiblioOnline\LaravelClickHouse\Database\Query\Builder;

class ConnectionTest extends TestCase
{
    public function testQuery()
    {
        $connection = new Connection(['host' => 'localhost']);

        $this->assertInstanceOf(Builder::class, $connection->query());
    }
}
