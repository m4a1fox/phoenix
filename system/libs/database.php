<?php
class Database extends PDO{
	public function __construct($dbdriver, $hostname, $dbname, $username, $password, $char_set){
    	try{
    	parent::__construct($dbdriver . "::host=". $hostname ."; dbname=".$dbname, $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.$char_set));
        parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            exception_handler($e, 'Ошибка подключения к БД');
            exit();
        }
    }
    
    public function insert($table, $data){        
        $row = $this->generalImplodeArray($data);
        $stn = $this->prepare("INSERT INTO `$table` SET $row ");
        $stn->execute($data);
        return $this->lastInsertId();
    }

    public function insertMulti($table, $data){        
        foreach($data as $value){
            $this->insert($table, $value);
        }
    }
    
    public function select($table, $data){
        $where = $this->generalAndArray($data);
        $sql = $this->prepare("SELECT * FROM `$table` WHERE $where");
        $sql->execute($data);
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function selectMulti($table){
        $sql = $this->query("SELECT * FROM `$table`");
        return $sql->fetchAll(PDO::FETCH_CLASS, "stdClass");
    
    }    
    
    public function update($table, $data, $where){
        $str = $this->generalImplodeArray($data);
        $stn = $this->prepare("UPDATE $table SET $str WHERE $where");       
        $stn->execute($data);
    }
    
    public function updateMulti($table, $data, $where){
        foreach($data as $val){    
            $row = $this->generalImplodeArray($val);
            $stn = $this->prepare("UPDATE $table SET $row WHERE `$where` = ".$val[$where]);
            $stn->execute($val);
        }        
    }
    
    public function delete($table, $data){
        $row = $this->generalImplodeArray($data);
        $stn = $this->prepare("DELETE FROM $table WHERE $row");
        $stn->execute($data);
    }
    
    
    public function cleanTable($table){
        $stn = $this->prepare("TRUNCATE TABLE $table");
        return $stn->execute();
    }
    
    public function selectLike($table, $data){
        $where = $this->generalLikeArray($data);
        $sql = $this->prepare("SELECT * FROM `$table` WHERE $where");
        $sql->execute($data);
        return $sql->fetch(PDO::FETCH_OBJ);
    }
    
    
    public function generalImplodeArray($data){
    	$str = '';
        ksort($data);
        return implode(', ', array_map(function($str){return '`'.$str.'` = :'.$str;}, array_keys($data)));
    }
    
    private function generalAndArray($data){
    	$str = '';
        ksort($data);
        return implode(" AND ", array_map(function($str){return '`'.$str.'` = :'.$str;}, array_keys($data)));
    }
    
    private function generalLikeArray($data){
    	$str = '';
        ksort($data);
        return implode(" AND ", array_map(function($str){return '`'.$str.'` LIKE :'.$str;}, array_keys($data)));
    }
    
    
    
    
    
    
    
}