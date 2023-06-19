<?php
namespace App\Controllers;
use Controller;
use Models\Fakulty;
use Models\Kafedra;
use Models\Users;
use Request;
class KafedraController extends Controller
{
    public function index(){
        $fakulty = new Kafedra();
        $fakultys = $fakulty->selectAllData();

        $r = new Fakulty();

        $this->view('kafedra/kafedra-eye',compact('fakultys','r'));
    }

    public function delete(int $id):void {
        $fakulty = new Kafedra();
        $fakulty->delete(['id'=>$id]);
        $_SESSION['success'] = "Kafedra o'chirildi";
        $this->redirect('/kafedra');
    }

    public function create()
    {
        $fakulty = new Fakulty();
        $fakultet = $fakulty->selectAllData();
        $this->view('kafedra/kafedra-add',compact('fakultet'));
    }


    public function store():void
    {
        $date = Request::getFormData();
        $fakulty = new Kafedra();
        if (!empty($date['name'])) {
            $fakulty->add($date);
            $_SESSION['success'] = "Kafedra qo'shildi";
        }else{
            $_SESSION['error'] = "Malumotlar maydoni to'ldirilmagan";
        }
        $this->redirect('/kafedra');
    }

    public function edit($id) : void
    {
        $f = new Kafedra();
        $row = $f->selectOne(["id" => $id]);

        $fakulty = new Fakulty();
        $fakultet = $fakulty->selectAllData();

        $this->view('kafedra/kafedra-edit',compact('row','fakultet'));
    }

    public function update($id)
    {
        $fakulty = new Kafedra();
        $data = Request::getFormData();
        $fakulty->update($data,["id" => $id]);
        $_SESSION['success'] = "Kafedra taxrirlandi";
        $this->redirect('/kafedra');
    }
}