<?php

declare(strict_types=1);

namespace BiblioOnline\LaravelClickHouse\Database\Eloquent\Concerns;

trait HasAttributes
{
    public function getDates(): array
    {
        return $this->dates;
    }

    public function getCasts(): array
    {
        return $this->casts;
    }

    protected function getDateFormat(): string
    {
        return $this->dateFormat ?? 'Y-m-d H:i:s';
    }
}
