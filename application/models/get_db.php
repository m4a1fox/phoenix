<?php 
    class get_db extends Model{
        
        function __construct(){
            parent::__construct();
        }
        
        function selectMulti($table){
            return $this->db->selectMulti($table);
        }
        
        function insert1($data, $table='user'){
            return $this->db->insert($table, $data);
        }
        
        
        function insert2($data, $table='user'){
            return $this->db->insertMulti($table, $data);
        }
        
        function select($id, $table = 'user'){
            return $this->db->select($table, $id);
        }
        
        function updateTable($id, $data, $table='user'){
            $this->db->update($table, $data, 'id='.$id);
        }
        
        function delete1($data, $table='user'){
            $this->db->delete($table, $data);
        }
        
        function selectLike($data, $table='content'){
            return $this->db->selectLike($table, $data);
        }

    }