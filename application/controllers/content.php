<?php

class Content extends Controller{
    function __construct() {
        parent::__construct();
        $this->model('get_db');
    }
    
    function Index(){
        
        header("Location: /");
        
        
        
    }
    
    function show($link='captcha'){
        
        $data['content'] = $this->get_db->select("`title` = '".$link."'", 'content');
        
        

        $this->view('content/index', $data);
    }
}