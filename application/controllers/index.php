<?php

class Index extends Controller{
    
    function __construct(){
        parent::__construct();
        MOUNT::$JS = array('views/index/js/test.js');
        $this->model('get_db');
    }
    
    function Index(){
        META::$TITLE = 'Home';
        $this->view('index/index');
    }
}