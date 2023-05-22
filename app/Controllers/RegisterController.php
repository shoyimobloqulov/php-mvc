<?php
    namespace App\Controllers;
    use Controller;
    use Models\Users;
    use Request;
    class RegisterController extends Controller
    {
        public function index(): void
        {
            $this->view('register');
        }

        public function register(){
            $date = Request::getFormData();
            if(strlen($date['name']) < 1 or strlen($date['password']) < 1 or strlen($date['email']) < 1){
                $_SESSION['error'] = "Malumotlar maydoni bo'sh";
                $this->redirect('/register');
            }
            $user = new Users();
            $date['password'] = sha1($date['password']);
            $user->add($date);
            $_SESSION['success'] = "Muofaqiyatli ro'yhatdan o'tdingiz";
            $this->redirect('/login');
        }
    }