<?php
    class Fadmin extends Controller{
        public $data = array();
        
        
        function __construct(){
            parent::__construct();
            $this->model('get_db');
            $this->js = array('views/fadmin/js/init.js');
        }
        
        function Index(){
            $this->view('fadmin/index');
        }
    }