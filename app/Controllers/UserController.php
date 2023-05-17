<?php
    namespace App\Controllers;
    use Controller;
    use Models\Users;
    use Request;
    class UserController extends Controller{
            public function settings(){

                $userRow = [
                    "email" => $_SESSION['date']['email'],
                    "name" =>  $_SESSION["date"]['name']
                ];

                $this->view('settings',compact('userRow'));
            }

            public function update(){
                $date = Request::getFormData();
                $user = new Users();

                $row = $user->selectOne([
                    "email" => $date['email']
                ]);

                $_SESSION['date'] = [
                    "email" => $date['email'],
                    "name"  => $date['name']
                ];

                $date['password'] = sha1($date['password']);

                $user->update($date,["id" => $row['id']]);
                $_SESSION['success'] = "Muofaqiyatli Taxrirlandi";
                $this->redirect('/settings');
            }
    }
