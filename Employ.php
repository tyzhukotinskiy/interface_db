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

    public function map($employ_data){
        $this->id = $employ_data['id'];
        $this->first_name = $employ_data['first_name'];
        $this->second_name = $employ_data['second_name'];
        $this->age = $employ_data['age'];
        $this->department = $employ_data['department_id'];
    }

    public function getAllEmployees(){
        $employ_query = $this->db->select(['*'], ['employees']);
        $employees = [];
        for($i = 0; $i < count($employ_query); $i++){
            $employ = new Employ();
            $employ->map($employ_query[$i]);
            $employees[] = $employ;
        }
        return $employees;
    }

    public function getEmployeesFramework($framework){
        $employ_query = $this->db->select(['e.*'], ['employees e', 'department d'], null, ['d.id = e.department_id', 'and d.name = \''.$framework.'\'']);
        $employees = [];
        for($i = 0; $i < count($employ_query); $i++){
            $employ = new Employ();
            $employ->map($employ_query[$i]);
            $employees[] = $employ;
        }
        return $employees;
    }
}

?>