<?php

class Index extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->js = array('views/index/js/test.js');
        $this->model('get_db');
    }
    
    function Index(){
        $data = array();
        self::$TITLE = 'Home';
        $this->view('index/index', $data);
    }
}