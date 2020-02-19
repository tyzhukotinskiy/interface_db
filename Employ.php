<?php

class Employ{
    public $id;
    public $first_name;
    public $second_name;
    public $age;
    public $department;
    public $db;

    public function __construct()
    {
        include_once 'Database.php';
        $this->db = new Database("mysql:host=localhost;dbname=office;charset=utf8", "root", "");
    }

    public function map(){

    }

    public function getAllEmployees(){
        echo "1";
        $this->db->select(['*'], ['employees']);

    }
}

?>