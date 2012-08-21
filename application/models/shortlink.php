<?php 
    class shortlink extends Controller{
        
        function __construct() {
            parent::__construct();
            $this->model('get_db');
        }   
        
        public function allLink(){
            return $data['shortLink'] = $this->get_db->selectMulti('content');
        }
    }
    

    