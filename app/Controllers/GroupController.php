<?php
namespace App\Controllers;
use Controller;
use Models\Group;
use Request;
class GroupController extends Controller
{
    public function index(){
        $group = new Group();
        $groups = $group->selectAllData();
        $this->view('group/group-eye',compact('groups'));
    }

    public function delete(int $id):void {
        $group = new Group();
        $group->delete(['id'=>$id]);
        $_SESSION['success'] = "Fakultet o'chirildi";
        $this->redirect('/group');
    }

    public function create()
    {
        $this->view('group/group-add');
    }


    public function store():void
    {
        $date = Request::getFormData();
        $group = new Group();
        if (!empty($date['name'])) {
            $group->add($date);
            $_SESSION['success'] = "Fakultet qo'shildi";
        }else{
            $_SESSION['error'] = "Malumotlar maydoni to'ldirilmagan";
        }
        $this->redirect('/group');
    }

    public function edit($id) : void
    {
        $group = new Group();
        $row = $fakulty->selectOne(["id" => $id]);

        $this->view('fakulty/fakulty-edit',compact('row'));
    }

    public function update($id)
    {
        $fakulty = new Group();
        $data = Request::getFormData();
        $fakulty->update($data,["id" => $id]);
        $_SESSION['success'] = "Fakultet taxrirlandi";
        $this->redirect('/fakulty');
    }
}