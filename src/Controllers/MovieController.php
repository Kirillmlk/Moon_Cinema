<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
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

    public function store(): void
    {
        $data = ['name' => 'Kirill'];
        $rules = ['name' => ['required', 'min:3', 'max:100']];

        $validator = new Validator();

        dd($validator->validate($data, $rules), $validator->errors());

        dd($this->request()->input('name'));

    }
}