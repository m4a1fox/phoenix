<?php

class Search extends Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function Index(){
        
        $data['post'] = $_POST;
        
        
        $this->view('search/index', $data);
        
        
    }
    
    
    
    
    
    
}