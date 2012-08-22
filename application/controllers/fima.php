<?php

class Fima extends Controller{
    
    
    function __construct() {
        parent::__construct();
        $this->js = array('views/fima/js/init.js');
    }
    
    
    
    function Index(){
        $this->view('fima/index');
    }
    
}