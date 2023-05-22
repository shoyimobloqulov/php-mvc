<?php
namespace App\Controllers;
use Controller;
use Models\Groups;
use Models\Student;
use Request;
class StudentController extends Controller
{
    public function index(){
        $student = new Student();
        $students = $student->selectAllData();
        $this->view('student/student-eye',compact('students','student'));
    }

    public function delete(int $id):void {
        $fakulty = new Student();
        $fakulty->delete(['id'=>$id]);
        $_SESSION['success'] = "Fakultet o'chirildi";
        $this->redirect('/fakulty');
    }

    public function create()
    {
        $this->view('student/student-add');
    }


    public function store():void
    {
        $date = Request::getFormData();
        $fakulty = new Student();
        if (!empty($date['name'])) {
            $fakulty->add($date);
            $_SESSION['success'] = "Fakultet qo'shildi";
        }else{
            $_SESSION['error'] = "Malumotlar maydoni to'ldirilmagan";
        }
        $this->redirect('/student');
    }

    public function edit($id) : void
    {
        $fakulty = new Student();
        $row = $fakulty->selectOne(["id" => $id]);

        $this->view('student/student-edit',compact('row'));
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