<?php

class Fima extends Controller{
    
    
    function __construct() {
        parent::__construct();
        $this->js = array('views/admin/fima/js/init.js');
    }
    
    
    
    function Index(){
        $this->view('/admin/fima/index');
    }
    
}