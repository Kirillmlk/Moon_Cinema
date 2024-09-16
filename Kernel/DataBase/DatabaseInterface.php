<?php

namespace App\Kernel\DataBase;

interface DatabaseInterface
{
    public function insert(string $table, array $data): int|false;
}