<?php

declare(strict_types=1);

namespace BiblioOnline\LaravelClickHouse\Database;

use BiblioOnline\LaravelClickHouse\Database\Query\Grammar;
use BiblioOnline\LaravelClickHouse\Database\Query\Builder;

class Connection extends \Tinderbox\ClickhouseBuilder\Integrations\Laravel\Connection
{

    public function query()
    {
        return new Builder($this, new Grammar());
    }

}
