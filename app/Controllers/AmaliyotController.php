<?php
namespace App\Controllers;

use Controller;
use Models\Amaliyot;
use Models\Direction;
use Models\Fakulty;
use Request;

class AmaliyotController extends Controller
{
   public function index() : void {
       $amaliyot = new Amaliyot();
       $amaliyot = $amaliyot->selectAllData();
       $this->view('amaliyot/index',compact('amaliyot'));
   }

    public function create()
    {
        $this->view('amaliyot/create');
    }

    public function delete(int $id):void {
        $fakulty = new Amaliyot();
        $fakulty->delete(['id'=>$id]);
        $_SESSION['error'] = "Amaliyot o'chirildi";
        $this->redirect('/amaliyot');
    }


    public function store():void
    {
        $date = Request::getFormData();
        $direction = new Amaliyot();
        if (!empty($date['name'])) {
            $direction->add($date);
            $_SESSION['success'] = "Amaliyot qo'shildi";
        }else{
            $_SESSION['error'] = "Malumotlar maydoni to'ldirilmagan";
        }
        $this->redirect('/amaliyot');
    }

    public function edit($id) : void
    {
        $direction = new Amaliyot();
        $row = $direction->selectOne(["id" => $id]);
        $this->view('amaliyot/edit',compact('row',));
    }

    public function update($id)
    {
        $direction = new Amaliyot();
        $data = Request::getFormData();
        $direction->update($data,["id" => $id]);
        $_SESSION['success'] = "Amaliyot taxrirlandi";
        $this->redirect('/amaliyot');
    }
}