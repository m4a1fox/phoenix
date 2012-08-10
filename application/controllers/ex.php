<?php
    class Ex extends Controller{
        
        function __construct(){
            parent::__construct();
            $this->library('form');
        }
        
        function index(){
            $data=array();
            if(isset($_REQUEST['send'])){
            
            
            $data = $this->form     ->post('name')
                                    ->val('required')
                                    ->post('age')
                                    ->val('digit')
                                    ->post('gender');
            
            
            
            $data = $data->submit() == 1 ? $data->fetch() : $data->submit();

//                dbg::showPrint($data);

            }
            $this->view('ex/index', array($data));
        }
    }