<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Http\Redirect;
use App\Kernel\Http\Request;
use App\Kernel\Validator\Validator;

//use App\Kernel\View\View;

class MovieController extends Controller
{
    public function index(): void
    {
        $this->view('movies');
    }

    public function add(): void
    {
        $this->view('admin/movies/add');
    }

    public function store()
    {
        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:50'],
        ]);

        if (!$validation) {
            (new Redirect())->to('/admin/movies/add');
        }

    }
}