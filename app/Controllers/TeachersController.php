<?php

    namespace App\Controllers;

    use Controller;
    use Models\Direction;
    use Models\Fakulty;
    use Models\Kafedra;
    use Models\Teachers;
    use Request;

    class TeachersController extends Controller{
        public function index()
        {
            $teachers = new Teachers();
            $teachers = $teachers->selectAllData();

            $f = new Fakulty();

            $k = new Kafedra();

            $this->view('teachers/index',compact('k','teachers','f'));
        }

        public function create()
        {
            $fakultet = new Fakulty();
            $fakultet = $fakultet->selectAllData();

            $kafedra = new Kafedra();
            $kafedra = $kafedra->selectAllData();

            $this->view('teachers/create',compact('fakultet','kafedra'));
        }

        public function delete(int $id):void {
            $fakulty = new Teachers();
            $fakulty->delete(['id'=>$id]);
            $_SESSION['error'] = "O'qituvchi o'chirildi";
            $this->redirect('/teachers');
        }


        public function store():void
        {
            $date = Request::getFormData();
            $direction = new Teachers();
            if (!empty($date['name'])) {
                $direction->add($date);
                $_SESSION['success'] = "O'qituvchi qo'shildi";
            }else{
                $_SESSION['error'] = "Malumotlar maydoni to'ldirilmagan";
            }
            $this->redirect('/teachers');
        }

        public function edit($id) : void
        {
            $direction = new Teachers();
            $row = $direction->selectOne(["id" => $id]);

            $fakultet = new Fakulty();
            $fakultet = $fakultet->selectAllData();

            $kafedra = new Kafedra();
            $kafedra = $kafedra->selectAllData();

            $this->view('teachers/edit',compact('row','kafedra','fakultet'));
        }

        public function update($id)
        {
            $direction = new Teachers();
            $data = Request::getFormData();
            $direction->update($data,["id" => $id]);
            $_SESSION['success'] = "O'qituvchi taxrirlandi";
            $this->redirect('/teachers');
        }
    }