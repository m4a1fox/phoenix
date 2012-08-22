<?php
    class Editor extends Controller{
        public $data = array();
        
        
        function __construct(){
            parent::__construct();
            $this->model('get_db');
            $this->js = array('views/editor/js/init.js');
        }
        
        function Index(){
            $this->view('editor/index');
        }
    }