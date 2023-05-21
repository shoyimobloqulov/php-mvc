<?php
namespace App\Controllers;
use Controller;
use Models\Users;
use Request;
class GroupController extends Controller
{
    public function index(){
        $fakulty = new Fakulty();
        $fakultys = $fakulty->selectAllData();
        $this->view('fakulty/fakulty-eye',compact('fakultys'));
    }

    public function delete(int $id):void {
        $fakulty = new Fakulty();
        $fakulty->delete(['id'=>$id]);
        $_SESSION['success'] = "Fakultet o'chirildi";
        $this->redirect('/fakulty');
    }

    public function create()
    {
        $this->view('fakulty/fakulty-add');
    }


    public function store():void
    {
        $date = Request::getFormData();
        $fakulty = new Fakulty();
        if (!empty($date['name'])) {
            $fakulty->add($date);
            $_SESSION['success'] = "Fakultet qo'shildi";
        }else{
            $_SESSION['error'] = "Malumotlar maydoni to'ldirilmagan";
        }
        $this->redirect('/fakulty');
    }

    public function edit($id) : void
    {
        $fakulty = new Fakulty();
        $row = $fakulty->selectOne(["id" => $id]);

        $this->view('fakulty/fakulty-edit',compact('row'));
    }

    public function update($id)
    {
        $fakulty = new Fakulty();
        $data = Request::getFormData();
        $fakulty->update($data,["id" => $id]);
        $_SESSION['success'] = "Fakultet taxrirlandi";
        $this->redirect('/fakulty');
    }
}