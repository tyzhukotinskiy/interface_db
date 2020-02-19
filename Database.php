<?php

class Database extends PDO{


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

    public function select($fields, $tables, $join = null, $where = null, $orderBy = null, $limit = null){
        if(!is_null($fields) || !is_null($tables)){
            $query = 'select ';
            $this->queryElement($fields, $query);
            $query .= 'from ';
            $this->queryElement($tables, $query);
            if(!is_null($join)){
                $this->queryElementSpace($join, $query);
            }
            if(!is_null($where)){
                $query .= 'where ';
                $this->queryElementSpace($where, $query);
            }
            if(!is_null($orderBy)){
                $query .= 'order by ';
                $this->queryElement($orderBy, $query);
            }
            if(!is_null($limit)){
                $query .= 'limit ';
                $this->queryElement($limit, $query);
            }
            echo "1";
            $r = $this->query($query)->fetchAll();
            print_r($r);
        }
        else{
            echo "Select fields and tables for query!";
        }
    }
}