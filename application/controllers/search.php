<?php

class Search extends Controller{
    
    public function __construct() {
        parent::__construct();
        $this->model('get_db');
    }
    
    public function Index(){
        $search = $_POST['search'];
        $data['post'] = $this->get_db->selectLike(array('content'=>'%'.$search.'%'), 'content');
        
        
        
        
        
        
        
        $this->view('search/index', $data);
    }
    
    
    
    
    
    
}