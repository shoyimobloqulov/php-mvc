<?php
namespace App\Controllers;
use Controller;
use Models\Direction;
use Models\Fakulty;
use Models\Groups;
use Models\Student;
use Request;
class StudentController extends Controller
{
    public function index(){
        $student = new Student();
        $fakulty = new Fakulty();
        $direction = new Direction();
        $group = new Groups();
        $students = $student->selectAllData();
        $this->view('student/student-eye',compact('students','fakulty','direction','group'));
    }

    public function delete(int $id):void {
        $fakulty = new Student();
        $fakulty->delete(['id'=>$id]);
        $_SESSION['success'] = "Student o'chirildi";
        $this->redirect('/student');
    }

    public function create()
    {
        $f = new Fakulty();
        $d = new Direction();
        $g = new Groups();

        $fakulty = $f->selectAllData();
        $direction = $d->selectAllData();
        $group = $g->selectAllData();
        $this->view('student/student-add',compact('fakulty','direction','group'));
    }


    public function store():void
    {
        $date = Request::getFormData();
        $fakulty = new Student();
        if (!empty($date['name'])) {
            $fakulty->add($date);
            $_SESSION['success'] = "Student qo'shildi";
        }else{
            $_SESSION['error'] = "Malumotlar maydoni to'ldirilmagan";
        }
        $this->redirect('/student');
    }

    public function edit($id) : void
    {
        $f = new Fakulty();
        $d = new Direction();
        $g = new Groups();

        $fakulty = $f->selectAllData();
        $direction = $d->selectAllData();
        $group = $g->selectAllData();

        $student = new Student();
        $row = $student->selectOne(["id" => $id]);

        $this->view('student/student-edit',compact('row','fakulty','direction','group'));
    }

    public function update($id)
    {
        $fakulty = new Student();
        $data = Request::getFormData();
        $fakulty->update($data,["id" => $id]);
        $_SESSION['success'] = "Student taxrirlandi";
        $this->redirect('/student');
    }
}