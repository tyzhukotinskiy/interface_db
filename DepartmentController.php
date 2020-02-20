<?php

class DepartmentController{
    public function __construct()
    {
    }

    public function actionShowEmployees(){
        include_once 'Employ.php';
        $employ = new Employ();
        $employees = $employ->getAllEmployees();
        include_once 'department.php';
    }

    public function actionShowEmployeesFramework($framework){
        include_once 'Employ.php';
        $employ = new Employ();
        $employees = $employ->getEmployeesFramework($framework);
        include_once 'department.php';
    }
}