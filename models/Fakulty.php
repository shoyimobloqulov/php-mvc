<?php

namespace Models;

use Model;

class Fakulty extends Model
{
    protected string $table = 'fakulty';

    public function FakultyName($id){
        $fakulty = new Fakulty();
        $row = $fakulty->selectOne(['id' => $id]);
        if (count($row) > 0){
            return $row['name'];
        }
        return -1;
    }
}