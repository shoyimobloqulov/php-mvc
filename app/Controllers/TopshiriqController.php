<?php

namespace App\Controllers;

use Controller;
use Models\Amaliyot;
use Models\Direction;
use Models\Fakulty;
use Models\Groups;
use Models\Kafedra;
use Models\Teachers;
use Models\Topshiriq;
use Request;

class TopshiriqController extends Controller{
    public function index()
    {
        $topshiriq = new Topshiriq();
        $topshiriq = $topshiriq->selectAllData();
        $f = new Fakulty();
        $y = new Direction();
        $g = new Groups();
        $this->view('topshiriq/index',compact('topshiriq','f','y','g'));
    }

    public function create()
    {
        $fakultet = new Fakulty();
        $fakultet = $fakultet->selectAllData();
        $this->view('topshiriq/create',compact('fakultet'));
    }

    public function update($id)
    {
        $date = Request::getFormData();
        $file = $_FILES['file'];
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];

        $extension = pathinfo($file_name, PATHINFO_EXTENSION);

        if($extension == 'docx' or $extension == 'pdf'){
            $ft = md5(time()).".".$extension;
            $filename = "../public/topshiriq-file/".$ft;
            move_uploaded_file($file_tmp, $filename);
            $date['file'] = $ft;
            $direction = new Topshiriq();
            if (!empty($date['izoh'])) {
                $direction->update($date,["id" => $id]);
                $_SESSION['success'] = "Topshiriq taxrirlandi";
            }else{
                $_SESSION['error'] = "Malumotlar maydoni to'ldirilmagan";
            }
        } else {
            $_SESSION['error'] = "Malumotlarni kiritishdagi hatolik";
        }

        $this->redirect('/topshiriq');
    }

    public function edit($id) : void
    {
        $fakulty = new Topshiriq();
        $row = $fakulty->selectOne(["id" => $id]);

        $fakultet = new Fakulty();
        $fakultet = $fakultet->selectAllData();

        $this->view('topshiriq/edit',compact('row','fakultet'));
    }


    public function store()
    {

        $date = Request::getFormData();
        $file = $_FILES['file'];
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];

        $extension = pathinfo($file_name, PATHINFO_EXTENSION);

        if($extension == 'docx' or $extension == 'pdf'){
            $ft = md5(time()).".".$extension;
            $filename = "../public/topshiriq-file/".$ft;
            move_uploaded_file($file_tmp, $filename);
            $date['file'] = $ft;
            $direction = new Topshiriq();
            if (!empty($date['izoh'])) {
                $direction->add($date);
                $_SESSION['success'] = "Topshiriq qo'shildi";
            }else{
                $_SESSION['error'] = "Malumotlar maydoni to'ldirilmagan";
            }
        } else {
            $_SESSION['error'] = "Malumotlarni kiritishdagi hatolik";
        }

        $this->redirect('/topshiriq');
    }

    public function delete(int $id):void {
        $fakulty = new Topshiriq();
        $fakulty->delete(['id'=>$id]);
        $_SESSION['error'] = "O'qituvchi o'chirildi";
        $this->redirect('/topshiriq');
    }
}