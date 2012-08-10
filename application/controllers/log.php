<?php
    class Log extends Controller{
public $data = array();
        
        
        function __construct(){
            parent::__construct();
            $this->model('get_db');
        }
        
        function in(){
$this->load->model('get_db');
            
            if(isset($_POST['send'])){
                $this->login = $_POST['login'];
                $this->pass = Hash::create('md5', $_POST['password'], HASH_KEY);
                
                $tr = $this->get_db->select('admin', "`name` = '".$this->login."' AND `pass` = '".$this->pass."'");
                
                
                
                
                
                if(is_object($tr)){
//                    $t = 'yes';
                Session::init();
                Session::set('login', 'admin');
                    header('Location: /');
                }else{
                    $t = 'Wrong';
                }
                
                // pass = 123123;
                
                
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