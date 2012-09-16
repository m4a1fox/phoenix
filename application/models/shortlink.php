<?php 
    class shortlink extends Controller{
        
        public static $t;
        
        function __construct() {
            parent::__construct();
            $this->model('get_db');
            self::$t = $this->get_db->selectMulti('content');
        }   
        
        public function allLink(){
//            self::$t = $this->get_db->selectMulti('content');
//            echo '<pre>'.print_r(self::$t, 1).'</pre>';
            return $this->get_db->selectMulti('content');
        }
        
        public static function gogo(){
            return self::$t;
        }
        
    }
    

    