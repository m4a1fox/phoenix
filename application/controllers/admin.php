<?php
    class Admin extends Controller{
        public $data = array();
        
        
        function __construct(){
            parent::__construct();
            $this->model('get_db');
        }
        
        function Index(){
            $this->add();
            $this->view('admin/index');
        }
        
        function add(){
            if(isset($_POST['send'])){
                $t = $this->get_db->insert1('content', array(
                    'title' => $_POST['title'], 
                    'tag' => $_POST['tag'],
                    'meta_k' => $_POST['meta_k'],
                    'meta_d' => $_POST['meta_d'],
                    'date' => $_POST['date'],
                    'time' => $_POST['time'],
                    'content' => $_POST['content']                    
                    ));
                header("Location: /admin");
            }
            
            
            
            
            
        }
    }