<?php
namespace App\Controllers;
use Controller;
use Models\Direction;
use Models\Fakulty;
use Models\Groups;
use Request;
class GroupController extends Controller
{
    public function index(){
        $g = new Groups();
        $fakulty = new Fakulty();
        $direction = new Direction();
        $group = $g->selectAllData();
        $this->view('group/group-eye',compact('group','fakulty','direction'));
    }

    public function delete(int $id):void {
        $group = new Groups();
        $group->delete(['id'=>$id]);
        $_SESSION['success'] = "Guruh    o'chirildi";
        $this->redirect('/group');
    }

    public function create()
    {
        $fakulty = new Fakulty();
        $direction = new Direction();

        $fakultys = $fakulty->selectAllData();
        $directions= $direction->selectAllData();

        $this->view('group/group-add',compact('fakultys','directions'));
    }


    public function store():void
    {
        $date = Request::getFormData();
        $group = new Groups();
        if (!empty($date['name'])) {
            $group->add($date);
            $_SESSION['success'] = "Guruh qo'shildi";
        }else{
            $_SESSION['error'] = "Malumotlar maydoni to'ldirilmagan";
        }
        $this->redirect('/group');
    }

    public function edit($id) : void
    {
        $fakulty = new Fakulty();
        $direction = new Direction();

        $fakultys = $fakulty->selectAllData();
        $directions= $direction->selectAllData();

        $group = new Groups();
        $row = $group->selectOne(["id" => $id]);

        $this->view('group/group-edit',compact('row','fakultys','directions'));
    }

    public function update($id)
    {
        $group = new Groups();
        $data = Request::getFormData();
        $group->update($data,["id" => $id]);
        $_SESSION['success'] = "Guruh taxrirlandi";
        $this->redirect('/group');
    }
}