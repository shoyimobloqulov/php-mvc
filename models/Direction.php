<?php

namespace Models;

use Models\Fakulty;
use Model;

class Direction extends Model
{
    protected string $table = 'direction';

    public function FakultyName($id) :string
    {
        $fakulty = new Fakulty();
        $row = $fakulty->selectOne(['id' => $id]);
        if (count($row) > 0) {
            return $row['name'];
        }
        return "O'chirilgan";
    }
    public function DirectionName($id) : string{
        $direction = new Direction();
        $row = $direction->selectOne(['id' => $id]);
        if (count($row) > 0){
            return $row['name'];
        }
        return "O'chirilgan";
    }
}