<?php

class Cadmin extends Controller{
    public function __construct() {
        parent::__construct();
    }
    
    
    public function Index(){
        
        
        
        $this->view("admin/cadmin/index");
    }
    
}