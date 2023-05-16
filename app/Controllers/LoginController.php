<?php

    namespace App\Controllers;
    use Controller;
    use Models\Users;
    use Request;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
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
                $this->redirect('/');
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

        public function ResetCode(): void
        {
            $date = Request::getFormData();
            $email = $date['email'];
            $user = new Users();
            $row = $user->selectAll([
                "email" => $email
            ]);

            if (count($row) > 0){
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'obloqulovshoyim1@gmail.com';                     //SMTP username
                    $mail->Password   = 'haxyahlfpshbywad';                               //SMTP password
                    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('obloqulovshoyim1@gmail.com', 'PasswordReset');
                    $mail->addAddress($email);

                    $code = rand(1000,9999);
                    print_r($row[0]['id']);

                    $user->update([
                        "code" => $code
                    ],['id' => $row[0]['id']]);

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Reset Password';
                    $mail->Body    = "Sizning tasdiqlash kodingiz: $code";
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $mail->send();
                    $_SESSION['email'] = $email;
                    $this->redirect('/reset');
                } catch (Exception $e) {
                    $_SESSION['error'] = $mail->ErrorInfo;
                    $this->redirect('/login');
                }
            }else{
                if (strlen($email) < 2){
                    $_SESSION['error'] = "Malumotlar maydoni bo'sh";
                }
                else{
                    $_SESSION['error'] = "Bunday foydalanuvchi tizimda mavjud emas";
                }
                $this->redirect('/code');
            }

        }


        public function resetView():void {
            $this->view('reset');
        }

        public function newPassword(){
            $date = Request::getFormData();
            $email = $date['email'];
            $password = sha1($date['password']);
            $code = $date['code'];

            if (strlen($email) < 8 or strlen($code) != 4){
                $_SESSION['error'] = "Malumotlar maydoni bo'sh";
            }

            $user = new Users();
            $row = $user->selectAll([
                "email" => $email
            ]);

            if (count($row) >= 1){

                $code1 = $row[0]['code'];
                if ($code1 == $code){
                    $user->update([
                        "password" => $password
                    ],['id' => $row[0]['id']]);

                    $_SESSION['date'] = [
                        "name" => $row[0]["name"],
                        "email" => $row[0]["email"],
                    ];

                    $user->update([
                        "code" => 0,
                        "status" => "success"
                    ],['id' => $row[0]['id']]);

                    $_SESSION['success'] = "Muofaqiyatli almashtirildi";

                    $this->redirect('/');
                }
                else{
                    $_SESSION['error'] = "Parol xato qaytadan kiriting";
                    $this->redirect('/reset');
                }
            }else {
                $_SESSION['error'] = "Malumot jonatishdagi hatolik, Bunday foydalanuvchi mavjud emas.";
                $this->redirect('/reset');
            }
        }
    }
