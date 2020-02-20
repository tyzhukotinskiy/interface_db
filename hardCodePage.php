<?php
    include_once 'Database.php';
    $db = new Database("mysql:host=localhost;dbname=office;charset=utf8", "root", "");
    $query = $db->select(['*'], ['employees']);
    var_dump($query);
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
    <h1>Hardcode</h1>
</body>
</html>