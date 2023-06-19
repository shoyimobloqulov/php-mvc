<?php

namespace App\Controllers;

use Controller;
use Models\Direction;
use Models\Fakulty;
use Request;

class DirectionController extends Controller
{
    public function index(){

        $directions = new Direction();
        $direction = $directions->selectAllData();
        $fakulty = new Fakulty();
        $this->view('direction/direction-eye',compact('direction','fakulty'));
    }

    public function delete(int $id):void {
        $fakulty = new Direction();
        $fakulty->delete(['id'=>$id]);
        $_SESSION['error'] = "Yo'nalish o'chirildi";
        $this->redirect('/direction');
    }

    public function create()
    {
        $f = new Fakulty();
        $fakulty = $f->selectAllData();
        $this->view('direction/direction-add',compact('fakulty'));
    }


    public function store():void
    {
        $date = Request::getFormData();
        $direction = new Direction();
        if (!empty($date['name'])) {
            $direction->add($date);
            $_SESSION['success'] = "Yo'nalish qo'shildi";
        }else{
            $_SESSION['error'] = "Malumotlar maydoni to'ldirilmagan";
        }
        $this->redirect('/direction');
    }

    public function edit($id) : void
    {
        $f = new Fakulty();
        $fakulty = $f->selectAllData();
        $direction = new Direction();
        $row = $direction->selectOne(["id" => $id]);
        $this->view('direction/direction-edit',compact('row','f','fakulty'));
    }

    public function update($id)
    {
        $direction = new Direction();
        $data = Request::getFormData();
        $direction->update($data,["id" => $id]);
        $_SESSION['success'] = "Yo'nalish taxrirlandi";
        $this->redirect('/direction');
    }

}