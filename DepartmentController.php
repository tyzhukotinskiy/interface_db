<?php

class DepartmentController{
    public function __construct()
    {
    }

    public function actionShowEmployees(){
        include_once 'Employ.php';
        $employ = new Employ();
        $employees = $employ->getAllEmployees();
        var_dump($employees);
    }

    public function actionShowEmployeesFramework($framework){
        include_once 'Employ.php';
        $employ = new Employ();
        $employees = $employ->getEmployeesFramework($framework);
        var_dump($employees);
    }
}