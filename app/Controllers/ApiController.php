<?php
namespace App\Controllers;

use Controller;
use Models\Amaliyot;
use Models\Fakulty;
use Models\Groups;
use Request;
use Models\Direction;

class ApiController extends Controller
{
    public function YunalishApi($id)
    {

        $direction = new Direction();
        $direction = $direction->selectAll([
            'fakulty_id' => $id
        ]);

        echo json_encode($direction);
    }

    public function GuruhApi($fakulty_id,$direction_id)
    {
        $guruh = new Groups();
        $guruh = $guruh->selectAll([
            'fakulty_id' => $fakulty_id,
            'direction_id' => $direction_id
        ]);

        echo json_encode($guruh);
    }
}
