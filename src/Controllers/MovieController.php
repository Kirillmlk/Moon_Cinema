<?php

namespace App\Controllers;

class MovieController
{
    public function movies(): void
    {
        include_once APP_PATH . '/views/pages/movies.php';
    }
}