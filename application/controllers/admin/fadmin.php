<?php

class Fadmin extends Controller{
    public function __construct() {
        parent::__construct();
        $this->library('downloadfile');
    }
    
    
    public function Index(){
        
        if(isset($_POST['send'])){
            $config['image'] = $_FILES['file'];
            $config['folder'] = './file/';
            $config['smallWH'] = array(300, 300);
            $this->downloadfile->initialize($config);
            $this->downloadfile->MoveImage();
        }
        
        
        
        
        
        
        $this->view("admin/fadmin/index");
    }
    
}