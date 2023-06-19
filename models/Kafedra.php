<?php
namespace Models;
use Model;

class Kafedra extends Model
{
    protected string $table = 'kafedra';

    public function KafedraName($id):string{
        $fakulty = new Kafedra();
        $row = $fakulty->selectOne(['id' => $id]);
        if (count($row) > 0){
            return $row['name'];
        }
        return "O'chirilgan";
    }
}