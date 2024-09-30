<?php

namespace App\Models;

class Movie
{
    public function __construct(
        public int $id,
        public string $name,
        public string $description,
        public string $preview,
        public int $category_id,
    ) {
    }

    public function category_id(): int
    {
        return $this->category_id;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function preview(): string
    {
        return $this->preview;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function id(): int
    {
        return $this->id;
    }
}