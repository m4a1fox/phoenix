<?php
    class Admin extends Controller{
        public $data = array();
        
        
        function __construct(){
            parent::__construct();
            $this->model('get_db');
        }
        
        function Index(){
            $this->add();
            $data['content'] = $this->get_db->selectMulti('content');
            $this->view('admin/index', $data);
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
                    'content' => $_POST['content']                    
                    ), 'content');
                header("Location: /admin");
            }
        }
        
        function delete($id){
            $this->get_db->delete1(array('id'=>$id), 'content');
            header("Location: /admin");
        }
        
        function edit($id){
            echo $id;
            $t = $this->get_db->select(array('id'=>$id), 'content');
            dbg::showPrint($t);
        }
    }