<?php 
    class get_db extends Model{
        
        function __construct(){
            parent::__construct();
        }
        
        function selectMulti(){
            return $this->db->selectMulti('user');
        }
        
        function insert1($data){
            return $this->db->insert('user', $data);
        }
        
        function select($table = 'user', $id){
            return $this->db->select($table, $id);
        }
        
        function updateTable($id, $data){
            $this->db->update('user', $data, 'id='.$id);
        }
        
        function delete1($data){
            $this->db->delete('user', $data);
        }

    }