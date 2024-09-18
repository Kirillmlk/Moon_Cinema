<?php

namespace App\Kernel\Controller;

use App\Kernel\Controller\Controller;

class RegisterController extends Controller
{
    public function index(): void
    {
        $this->view('register');
    }


    public function register(): void
    {
        $validation = $this->request()->validate([
            'email' => ['required', 'email',],
            'password' => ['required', 'min:6'],
        ]);

        if (!$validation) {
            foreach ($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }
            $this->redirect('/register');
        }

        dd("user is registered");
    }
}