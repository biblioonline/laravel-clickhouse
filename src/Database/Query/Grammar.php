<?php

declare(strict_types=1);

namespace BiblioOnline\LaravelClickHouse\Database\Query;

use DateTimeInterface;
use Tinderbox\ClickhouseBuilder\Query\Grammar AS BaseGrammar;

class Grammar extends BaseGrammar
{

    /**
     * Get the format for database stored dates.
     *
     * @return string
     */
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }

    /**
     * Convert value in literal.
     *
     * @param string|Expression|Identifier|DateTimeInterface|array $value
     *
     * @return string|array|null|int
     */
    public function wrap($value)
    {
        if ($value instanceof DateTimeInterface) {
            return "'" . $value->format($this->getDateFormat()) . "'";
        }

        return parent::wrap($value);
    }

}