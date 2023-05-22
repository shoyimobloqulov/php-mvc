<?php

namespace Models;

use Models\Fakulty;
use Model;

class Direction extends Model
{
    protected string $table = 'direction';

    public function FakultyName($id)
    {
        $fakulty = new Fakulty();
        $row = $fakulty->selectOne(['id' => $id]);
        return $row['name'];
    }
    public function DirectionName($id){
        $direction = new Direction();
        $row = $direction->selectOne(['id' => $id]);
        if (count($row) > 0){
            return $row['name'];
        }
        return -1;
    }
}