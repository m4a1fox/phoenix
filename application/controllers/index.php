<?php

class Index extends Controller{
    function __construct(){
        parent::__construct();
        $this->js = array('views/index/js/test.js');
    }
    
    function index(){

        $data = array();
        $this->model("welcome");
        $data['welcome'] = $this->welcome->welcome();
        $this->view('index/index', $data);
    }
}