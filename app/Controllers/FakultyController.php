<?php
namespace App\Controllers;
use Controller;
use Models\Fakulty;
use Models\Users;
use Request;
class FakultyController extends Controller
{
    public function index(){
        $fakulty = new Fakulty();
        $fakultys = $fakulty->selectAllData();
        $this->view('fakulty/fakulty-eye',compact('fakultys'));
    }

    public function delete(){
        $date = Request::getFormData();
        $fakulty = new Fakulty();
        $fakulty->delete(['id'=>$date['id']]);
        $this->redirect('./fakulty');
    }

}