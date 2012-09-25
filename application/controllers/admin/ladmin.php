<?php

class Ladmin extends Controller{
     public $data = array();
        
        
        function __construct(){
            parent::__construct();
            $this->model('get_db');
            MOUNT::$JS = array('views/admin/js/init.js', 'views/admin/js/func.js');
        }
        
        function Index(){
            $this->add();
            $data['content'] = $this->get_db->selectMulti('content');
            $this->view('admin/ladmin/index', $data);
        }
        
        function add(){
            if(isset($_POST['send'])){
                $this->get_db->insert1(array(
                    'title' => $_POST['title'], 
                    'tag' => $_POST['tag'],
                    'meta_k' => $_POST['meta_k'],
                    'meta_d' => $_POST['meta_d'],
                    'date' => $_POST['date'],
                    'time' => $_POST['time'],
                    'content' => $_POST['content'],
                    'link' => $_POST['link']
                    ), 'content');
                header("Location: /ladmin");
            }
        }
        
        function delete($id){
            $this->get_db->delete1(array('id'=>$id), 'content');
            header("Location: /ladmin");
        }
        
        function edit($id){
            
            if(isset($_POST['send'])){
                $this->get_db->updateTable($_POST['id'], array(
                    'title'=>$_POST['title'],
                    'tag'=>$_POST['tag'],
                    'meta_k'=>$_POST['meta_k'],
                    'meta_d'=>$_POST['meta_d'],
                    'date'=>$_POST['date'],
                    'time'=>$_POST['time'],
                    'content'=>$_POST['content'],
                    'link'=>$_POST['link'],
                    ), 'content');
                header("Location: /ladmin");
            }
            $data['content'] = $this->get_db->select(array('id'=>$id), 'content');
            $this->view('/admin/ladmin/edit', $data);
        }
    
}