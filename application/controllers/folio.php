<?php

class Folio extends Controller{
    
    public function __construct() {
        parent::__construct();
        $this->model('get_db');
    }
    
    
    function Index(){
        
        $data['content'] = $this->get_db->selectMulti('folio');
        
        
        $this->view('folio/index', $data);
        
        
        
    }
    
    
    
}