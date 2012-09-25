<?php 
    class shortlink extends Controller{
        
        public static $link;
        
        function __construct() {
            parent::__construct();
            $this->model('get_db');
            self::$link = $this->get_db->selectMulti('content');
        }   
        
        public static function allLink(){
            new shortlink();
            return self::$link;
        }  
    }
    

    