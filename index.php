<?php
    include_once 'Router.php';
    $router = new Router();
    $router->run();
    //$db->select(['first_name', 'age', 'employees.id', 'department.name as DEP_NAME', 'projects.name as PRO_NAME'], ['employees'], ['join department on employees.department_id = department.id', 'join projects on projects.department_id = department.id'],  ['employees.age > 25'], ['age'], ['2']);
    //echo "<br />select first_name, age, employees.id, department.name as DEP_NAME, projects.name as PRO_NAME from employees join department on employees.department_id = department.id join projects on projects.department_id = department.id where employees.age > 25 order by age limit 2";
    echo $_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Work with DB</h1>
</body>
</html>