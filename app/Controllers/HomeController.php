<?php

    namespace App\Controllers;

    use Controller;

    class HomeController extends Controller
    {
        public function __invoke(): void
        {
            if (!isset($_SESSION['login-success'])){
                header("location: /login");
            }
            $this->view('home');
        }
    }