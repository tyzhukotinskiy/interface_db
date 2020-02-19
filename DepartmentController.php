<?php

class DepartmentController{
    public function __construct()
    {
    }

    public function actionShowEmployees(){
        echo "Pokaz employees";
        include_once 'Employ.php';
        $employ = new Employ();
        echo "1";
        $employ->getAllEmployees();
    }

    public function actionShowEmployeesFramework($framework){
        echo "Pokaz employees $framework";
    }
}