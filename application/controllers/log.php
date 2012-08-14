<?php
    class Log extends Controller{
        public $data = array();
        
        
        function __construct(){
            parent::__construct();
            $this->model('get_db');
        }
        
        function in(){
            if(isset($_POST['send'])){
                $this->login = $_POST['login'];
                $this->pass = Hash::create('md5', $_POST['password'], HASH_KEY);
                $tr = $this->get_db->select(array('name'=>  $this->login, 'pass'=>$this->pass), 'admin', 'AND');
                
                if(is_object($tr)){
                Session::init();
                Session::set('login', 'admin');
                    header('Location: /');
                }else{
                    $t = 'Wrong';
                }
                
                $this->data['post'] = $t;
            }else{
                $this->data['post'] = NULL;
            }
            $this->view('log/index', $this->data);
        }
        
        function out(){
            Session::destroy();
            header("Location: /");
        }
    }