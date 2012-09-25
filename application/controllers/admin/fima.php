<?php

class Fima extends Controller{
    
    
    function __construct() {
        parent::__construct();
        MOUNT::$JS = array('views/admin/fima/js/init.js');
    }
    
    
    
    function Index(){
        $this->view('/admin/fima/index');
    }
    
}