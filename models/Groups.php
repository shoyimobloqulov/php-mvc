<?php

namespace Models;

use Model;

class Groups extends Model
{
    protected string $table = 'guruh';
    public function guruhName($id){
        $group = new Groups();
        $row = $group->selectOne(['id' => $id]);
        if (count($row) > 0){
            return $row['name'];
        }
        return -1;
    }

}

