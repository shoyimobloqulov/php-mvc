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
}