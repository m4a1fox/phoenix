<?php

class Folio extends Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    
    function Index(){
        
        
        
        
        $this->view('folio/index');
        
        
        
    }
    
    
    
}