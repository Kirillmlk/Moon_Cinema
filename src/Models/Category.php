<?php

namespace App\Models;

class Category
{
    public function __construct(
        public int $id,
        public string $name,
        public string $createdAt,
        public string $updatedAt,
    ) {
    }

    private function id(): int
    {

    }

    public function name(): string
    {

    }

    private function createdAt(): string
    {

    }

    private function updatedAt(): string
    {

    }
}