<?php
    namespace Models;
    use Model;
    class Student extends Model
    {
        protected string $table = 'student';
        public function guruhName($id){
            $group = new Groups();
            $row = $group->selectOne(['id' => $id]);
            if (count($row) > 0){
                return $row['name'];
            }
            return -1;
        }
    }