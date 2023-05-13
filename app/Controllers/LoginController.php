<?php

    namespace App\Controllers;
    use Controller;
    use Couchbase\User;
    use Models\Users;
    use Request;
    class LoginController extends Controller
    {
        public function index(): void
        {
            $this->view('login');
        }

        public function login(): void
        {
            $error = [];
            $date = Request::getFormData();

            if (!empty($date['email']) and !empty($date['password'])){
                $email = $date['email'];
                $password = sha1($date['password']);

                $user = new Users();
                $row = $user->selectAll([
                   "email" => $email,
                   "password" => $password
                ]);

                if (count($row) > 0){
                    $_SESSION['login-success'] = 1;
                    $_SESSION['date'] = $row[0];
                    $error = [
                        "message" => "Tizimga muofaqiyatli kirdingiz",
                        "success" => 1
                    ];
                }else{
                    $error = [
                        "message" => "Bunday nomli foydalanuvchi topilmadi",
                        "success" => 0
                    ];
                }
            }
            else{
                $error = [
                    "message" => "Malumotlar qatori bo'sh",
                    "success" => 0
                ];
            }
            if ($error['success']){
                $this->view('home');
            }else{
                $_SESSION['error'] = $error['message'];
                $this->redirect('/login');
            }
        }

        private function dd(array $getFormData,bool $exit=true)
        {
            echo '<pre>';
            var_dump($getFormData);
            echo '</pre>';

            if ($exit) {
                exit;
            }
        }

        public function logout(): void
        {
            session_start();
            session_destroy();
            session_unset();
            $this->redirect('/login');
        }

        public function reset(){
            $this->view('code');
        }
    }
