<?php

class Database{
    private $pdo;
    private $isConnect;

    public function connect(){
        $this->pdo = new PDO('mysql:host=localhost;dbname=office', 'root', '');
    }

    public function queryElement($element, &$query){
        for($i = 0; $i < count($element); $i++){
            if($i == count($element)-1) $query .= $element[$i].' ';
            else $query .= $element[$i].', ';
        }
    }

    public function queryElementSpace($element, &$query){
        for($i = 0; $i < count($element); $i++){
            $query .= $element[$i].' ';
        }
    }

    public function select($fields, $tables, $where = null, $orderBy = null, $limit = null){
        if(!is_null($fields) || !is_null($tables)){
            $query = 'select ';
            $this->queryElement($fields, $query);
            $query .= 'from ';
            $this->queryElement($tables, $query);
            if(!is_null($where)){
                $query .= 'where ';
                $this->queryElementSpace($where, $query);
            }
            if(!is_null($orderBy)){
                $query .= 'order_by ';
                $this->queryElementSpace($orderBy, $query);
            }
            echo $query;
        }
        else{
            echo "Select fields and tables for query!";
        }
    }

    public function selectJoin(){}
}